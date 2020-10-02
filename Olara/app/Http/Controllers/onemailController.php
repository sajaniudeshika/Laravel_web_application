<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\SendEmail;

class onemailController extends Controller
{
    public function index(){
        return view("mail.onemail");
    }

    public function onesendemail(Request $get){
        $this->validate($get,[
            
            "subject" => "required",
            "email" => "required",
            "message" => "required",
        ]);
        
        

        $email =$get->email;
        $subject = $get->subject;
        $message = $get->message;

        Mail::to($email)->send(new SendEmail($email,$subject,$message));
        return redirect()->back();
    }
}
