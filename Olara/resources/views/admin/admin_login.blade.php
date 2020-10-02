<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="text-center">
           <h1> Admin Login</h1>
                <div class="row">
                    <div class="col-md-12">
                    
                    <!-- unsuccess msg when login-->
                   @if(Session::has('flash_message_error'))
                    

                    <div class="alert alert-danger alert-block">
	                <button type="button" class="close" data-dismiss="alert">×</button>	
                    <strong>{!! session('flash_message_error')!!}</strong>
                    </div>
 
                     @endif 



                     @if(Session::has('flash_message_success'))
                    

                    <div class="alert alert-success alert-block">
	                <button type="button" class="close" data-dismiss="alert">×</button>	
                    <strong>{!! session('flash_message_success')!!}</strong>
                    </div>
 
                     @endif 

                   

                     

                        


                   
                        <form id="loginform" method="post" action="{{url('admin')}}" >

                            {{csrf_field()}}
                            
                            <input type="email" class="form-control" name="email" placeholder="email" ></br></br>
                            <input type="password" class="form-control" name="password" placeholder="Password" >
                            </br>
                            </br>
                            </br>
                            <input type="submit" class="btn-btn-primary" value="Login">
                           

                        </form>
                        
                    </div>
                </div>
        </div>
    </div>
</body>
</html>