<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="stylesheet" href="{{asset('css/backend_css/adminHome.css')}}" />


<!-- css for datatables
		<link rel="stylesheet" href="{{ asset('css/backend_css/bootstrap.min.css') }}" />
		<link rel="stylesheet" href="{{ asset('css/backend_css/bootstrap-responsive.min.css') }}" />
		<link rel="stylesheet" href="{{ asset('css/backend_css/uniform.css') }}" />
		<link rel="stylesheet" href="{{ asset('css/backend_css/select2.css') }}" />
		<link rel="stylesheet" href="{{ asset('css/backend_css/matrix-style.css') }}" />
		<link rel="stylesheet" href="{{ asset('css/backend_css/matrix-media.css') }}" />
		<link href="font-awesome/css/font-awesome.css" rel="stylesheet" /> -->
		<link href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css' rel='stylesheet' type='text/css'>
		<link href='https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css' rel='stylesheet' type='text/css'>


		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
 	 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>



<!-- css for side bar -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		
<!-- inline css -->

<style>
body {
  
}

/* Fixed sidenav, full height */
.sidenav {
 /* height: 100%;
  width: 200px; */
  position: fixed;
  z-index: 1;
 /* top: 0;
  left: 0;*/
  background-color: light blue;
  overflow-x: auto;
  padding-top: 10px;
  padding-bottom: 10px;
}

/* Style the sidenav links and the dropdown button */
.sidenav a, .dropdown-btn {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #000000;
  display: block;
  border: none;
  background: none;
  width: 100%;
  text-align: left;
  cursor: pointer;
  outline: none;
}

/* On mouse-over */
.sidenav a:hover, .dropdown-btn:hover {
  color: #800000;
}

/* Main content */
.main {
  margin-left: 200px; /* Same as the width of the sidenav */
  font-size: 20px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

/* Add an active class to the active dropdown button */
.active {
  background-color: #B0E0E6;
  color: black;
}

/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
.dropdown-container {
  display: none;
  background-color: #B0C4DE;
  padding-left: 8px;
}

/* Optional: Style the caret down icon */
.fa-caret-down {
  float: right;
  padding-right: 8px;
}

/* Some media queries for responsiveness */
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

#p{
  font-size:20px;
}



</style>


    
	
	<title> admin home </title>
	
		
		
			
</head>


<body>
		
		
		
		@include('layouts.adminLayout.admin_header')
		
<div class="name col-12">
		
	   
					
		 
		 <div class="col-2"> 
			@include('layouts.adminLayout.admin_sidebar')
		 </div>
		
		<div class="col-10">
				

				
			<div class="content">
		    	 @yield('content')
			</div>
			
			 
		</div>
			
			
			
</div>	
		
		
		
		
		
		
		
		<!--new footer-->
	
		
		
		@include('layouts.adminLayout.admin_footer')
		
		


<!-- script for navigation bar -->
<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script>



<!-- js for datatables-->
<script src="{{ asset('js/backend_js/datatable.js') }}"></script>
<script src="{{ asset('js/backend_js/delete.js') }}"></script> 
<script src='https://code.jquery.com/jquery-3.3.1.js'></script> 
<script src='https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js'></script> 
<script src='https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js'> </script> 




</body>
</html>
