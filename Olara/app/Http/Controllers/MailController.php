<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\SendEmail;
use DB;
class MailController extends Controller
{
    public function home(){
        return view("mail.mail");
    }

    public function sendemail(Request $get){
        $this->validate($get,[
            
            "subject" => "required",
            "message" => "required",
        ]);
        
        $mail = DB::table('customers')->select('email')->get();

        $email =$mail;
        $subject = $get->subject;
        $message = $get->message;

        Mail::to($email)->send(new SendEmail($subject,$message));
        return redirect()->back();
    }
}
