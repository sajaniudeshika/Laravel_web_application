
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
  
  <nav class="navbar fixed-top navbar-expand-lg navbar-blue bg-light">
  
  
              <ul class="dropdown-menu">
@if(Auth::check())
       <li><a href="{{ route('user.profile')}}">User Profile</a></li>
       <li role="separator" class="divider"></li>
       <li><a href="{{route('user.logout')}}">Logout</a></li>
@else
       <li><a href="{{ route('user.signup')}}">Signup</a></li>
       <li><a href="{{ route('user.signin')}}">Signin</a></li>
@endif
        
         </ul>
          </li>
            </ul>
          </div>
          </div>
 </nav>




