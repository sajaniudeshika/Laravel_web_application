@extends('layout')
@section('mainContent')



            @if(session()->has('success'))
              <div class="center" style="text-align: center;">
                    <div class="alert alert-success">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                            </button>
                        <strong>Notification</strong> {{ session()->get('success') }}
                    </div>
                </div>
            @endif


<div class="">
<br><br>
</div>
<div class="container">
        <div class="text-center">
            <h1>Contact Us</h1>

            <br><br>

            

                    <form method="post" action="create" enctype="multipart/form-data">
                      

                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                       

                        <table class="table table-light" >
                            <input id="invisible_id" name="id" type="hidden" value="">

                            
                            
                            <tr>
                                <th>Name</th>
                                <td><input type="text" class="form-control" name="name" required></td>
                            </tr>
                            
                         <div class="form-group{{ $errors->has('email') ? 'has-error' : ''}}">
                            <tr>
                                <th>Email Address</th>
                                <td><input type="email" class="form-control" name="email" value="{{old('email')}}" required></td>
                                
                            </tr>
                        </div>
                            
                            <tr>
                                <th>Subject</th>
                                <td><input type="text" class="form-control" name="subject" required></td>
                            </tr>
                            <tr>
                                <th>Message</th>
                                <td><textarea name="message" class="form-control" cols="19" rows="5" required></textarea></td>
                                
    
                            </tr>
                            


                        </table>

                        <br><br>

                        <div class="">
                            <input type="submit" class="btn btn-primary" value="Submit">

                            
                        </div>

                    </form>

                </div>
            </div>
            <br>
            <br>

@endsection
