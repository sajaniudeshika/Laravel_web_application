<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Customer;
use App\Reply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class CommentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $comments = Comment::latest('created_at')->get();
        //return $comments;
        return view('comment', ['comments' => $comments]);
    }

    public function viewcomment(){
        $comments=Comment::get();
        $users = DB::select("select * from comments ");
       return view('viewcomment')->with(compact('comments'));
    }

    public function store(Request $request)
    {
        if (Auth::check()) {
            Comment::create([
                'fname' => Auth::user()->fname,
                'comment' => $request->input('comment'),
                'user_id' => Auth::user()->id
            ]);

            return redirect()->back()->with('success','Comment Added successfully..!');
        }else{
            return back()->withInput()->with('error','Something wrong');
        }


        
    }


    public function destroy(Comment $comment)
    {
        if (Auth::check()) {

            $reply = Reply::where(['comment_id'=>$comment->id]);
            $comment = Comment::where(['user_id'=>Auth::user()->id, 'id'=>$comment->id]);
            if ($reply->count() > 0 && $comment->count() > 0) {
                $reply->delete();
                $comment->delete();
                return 1;
            }else if($comment->count() > 0){
                $comment->delete();
                return 2;
            }else{
                return 3;
            }

        }    
    }
}
