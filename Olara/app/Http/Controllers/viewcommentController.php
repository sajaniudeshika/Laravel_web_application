<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Customer;
use App\Reply;

use Illuminate\Support\Facades\Auth;
use DB;
class viewcommentController extends Controller
{
    
    public function viewcomment(){
        $comments=Comment::get();
        $users = DB::select("select * from comments ");
       return view('viewcomment')->with(compact('comments'));
    }
}
