<?php

namespace App\Http\Controllers;

use App\Payment;
use Illuminate\Http\Request;
use Auth;
use DB;
use App\Http\Controllers\Controller;

class PaymentController extends Controller
{
    

    public function viewPaymentDetails(){
        $payments=Payment::get();
      //  $categories =json_decode(json_encode($categories));
       return view('admin.payments.view_payment_details')->with(compact('payments'));
    }


    //user view payment history
    public function __construct(){
        $this->middleware('auth');



    }
    public function index(){
        $id=Auth::user()->id;
    
        $users = DB::select("select * from payments where cus_id='$id'");
        return view('payment',['users'=>$users]);
    }


}
