<!DOCTYPE html>
<html>


<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="stylesheet" href="{{asset('css/backend_css/adminHome.css')}}" />



		<link href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css' rel='stylesheet' type='text/css'>
		<link href='https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css' rel='stylesheet' type='text/css'>


		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
 	 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

      @include('layouts.search_bar')
    
	
	<title> admin home </title>
	
		
		
			
</head>

<body>

<div style="background-color:lightblue">
  <br>
  <br>
  <br>
  <h3 align="center">this is header part</h3>

 
  <br>
  <br>
  <br>
</div>


<h1>products</h1>

<div style="background-color:white" >
       <!-- <tbody> -->

       <div class="col-sm-12">
          @foreach($products as $product)
           <!-- <tr> -->
               <!-- <td> -->
               
            <div class="col-sm-3">     
                @if(!empty($product->image))
                    <img src="{{ asset('/images/backend_images/products/large/'.$product->image) }}" style="width:200px; hight:200px;" >
                     
                <br>
                {{ $product->id }}
                {{ $product->pro_date }}<br>
                
                {{ $product->category_name }} <br>
                {{ $product->pro_name }}<br>
                {{ $product->pro_size }}<br>
                {{ $product->pro_code }}<br>
                {{ $product->pro_details }}<br>
                {{ $product->pro_color }}<br>
                {{ $product->pro_price }}<br> 
               
                    
                 
               <!-- </td> -->
                   @endif 
                    
             </div>  
                
          <!--  </tr> -->
           @endforeach 

           </div>    
            
      <!-- </tbody> -->

      

</div>
<div class="col-sm-12">
<div style="background-color:lightblue">
  <br>
  <br>
  <br>
  <h3 align="center">this is header part</h3>
  <br>
  <br>
  <br>
</div>
</div>


<!-- start of search function-->




</body>

</html>








