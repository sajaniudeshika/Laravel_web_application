@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

             <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="text-center">{{ Auth::user()->fname }}'s Profile</h2>
                </div>
            
                <div class="panel-body">
                   

                        
                            <label for="fname" class="col-md-4 control-label">First Name</label>

                            <div class="col-md-6">
                                <input id="fname" type="text" class="form-control" name="fname" value="{{ $user->fname }}" disabled>

                                
                           
                        </div>


                        
                            <label style="padding-top:5px" for="lname" class="col-md-4 control-label">Last Name</label>

                            <div class="col-md-6" style="padding-top:5px">
                                <input id="lname" type="text" class="form-control" name="lname" value="{{ $user->lname }}" disabled>

                                
                        </div>

                        
                            <label style="padding-top:5px" for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6" style="padding-top:5px">
                                <input id="email" type="email" class="form-control" name="email" value="{{ $user->email }}" disabled>

                               
                        </div>

                        
                        
                            <label style="padding-top:5px" for="address" class="col-md-4 control-label">Address</label>

                            <div class="col-md-6" style="padding-top:5px">
                                <input id="address" type="text" class="form-control" name="address" value="{{  $user->address }}" disabled>

                        </div>

                        
                            <label style="padding-top:5px" for="contactno" class="col-md-4 control-label">Contact No</label>

                            <div class="col-md-6" style="padding-top:5px">
                                <input id="contactno" type="text" class="form-control" name="contactno" value="{{  $user->contactno }}" disabled>

                               
                        </div>

                            
                    </form>
                                    

            </div>
            
        </div>
        <div class="panel-heading">
                <a href="{{ url('/payment') }}"><i class="fa fa-btn fa-user"></i><h3>Payment History</h3></a>
         </div>     
    </div>
</div>
@endsection
