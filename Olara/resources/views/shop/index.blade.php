@extends('layouts.master')
@include('partials.header')
@section('title')
    Shoping Cart
@endsection

@section('content')
  
  @if(Session::has('success'))
  <div class="row">
    <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
      <div id="charge-message"class="alert alert-success">
        {{ Session::get('success') }}
      </div>
    </div>
  </div>
  @endif
  
  <br>
  <br>

  <div style="background-color:white" >
       <!-- <tbody> -->

       <div class="col-sm-12">

       


          @foreach($products as $product)
           <!-- <tr> -->
               <!-- <td> -->
               
            <div class="col-sm-3">     
                @if(!empty($product->image))
                    <img src="{{ asset('/images/backend_images/products/medium/'.$product->image) }}" style="width:200px; hight:300px;" >
                     
                <br>
                {{ $product->category_name }} <br>
                {{ $product->pro_name }}<br>
                {{ $product->pro_details }}<br>
                {{ $product->pro_color }}<br>
               Rs. {{ $product->pro_price }}.00<br> 
               
                <a href="/add-to-cart/{{$product->id}}/view" class="btn btn-primary pull-right" role="button" style="margin-left: 5px;">Add to Cart</a >
                 
                <a href="http://localhost/published/NewProject3.php" class="btn btn-primary pull-right" role="button" style="margin-left: 5px;">360 view</a >
                 


               <!-- </td> -->
                   @endif 
                    
                   <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>

             </div>  
                
          <!--  </tr> -->
           @endforeach 


           
       <div class="col-sm-12">

           <div class="col-sm-3">
					<div class="pi-pic">
						<img src="./img/product/94506.jpg" alt="">
            T shirt<br>
            Cotton Tshirt<br>
            QC level:05 , Meterial :Cotton<br>
						Red<br>
						Rs. 700.00 <br>
            <a href="/add-to-cart/{{$product->id}}/view" class="btn btn-primary pull-right" role="button" style="margin-left: 5px;">Add to Cart</a >
                 
                <a href="http://localhost/published/NewProject2.php" class="btn btn-primary pull-right" role="button" style="margin-left: 5px;">360 view</a >
              <br>
              <br>   
					</div>
				</div>
        </div>

           <br>
           <br>

           </div>  
             
            
      <!-- </tbody> -->

      

</div>



@endsection