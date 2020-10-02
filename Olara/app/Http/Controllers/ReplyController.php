<?php

namespace App\Http\Controllers;

use App\Reply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReplyController extends Controller
{
    public function store(Request $request)
    {
        if (Auth::check()) {
            Reply::create([
                'comment_id' => $request->input('comment_id'),
                'fname' => $request->input('name'),
                'reply' => $request->input('reply'),
                'user_id' => Auth::user()->id
            ]);

            return redirect()->route('home')->with('success','Reply added');
        }

        return back()->withInput()->with('error','Something wronmg');
        
    }

    public function destroy(Reply $reply)
    {
        if (Auth::check()) {
            $reply = Reply::where(['id'=>$reply->id,'user_id'=>Auth::user()->id]);
            if ($reply->delete()) {
                return 1;
            }else{
                return 2;
            }
        }else{

        }
        return 3;
    }
}
