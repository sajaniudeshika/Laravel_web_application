<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;

class AdminController extends Controller
{
    public function login(Request $request ){

        if($request ->isMethod('post')){
            $data = $request->input();

            if(Auth::attempt(['email' =>$data['email'],'password' =>$data['password'],'districcode'=>'1'])){
              //echo "success";die;
              Session::put('adminSession',$data['email']);
               return redirect('admin/dashboard'); 
            }

            else{
               // echo "Failed"; die;
               //redirect to admin login page and show flash msg in admin_login blade
               return redirect('/admin')->with('flash_message_error','Invalid username or password');


            }
                
        }

        return view('admin.admin_login');
    }

    public function dashboard(){
        if(Session::has( 'adminSession')){
                //perform all dashboard tasks
        }
        else{
            return redirect('/admin')->with('flash_message_error','please loggin to access ');
 
        }
       // echo "test"; die;
        return view('admin.dashboard');
    }

    public function logout(){
        Session::flush();
        return redirect('/admin')->with('flash_message_success','logout successfully');



     }

}
