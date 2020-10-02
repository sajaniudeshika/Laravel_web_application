@extends('layouts.adminLayout.admin_desing')
@section('content')





<div class="payments">    
 


    

    
    <h1>Order Details</h1> 
    
    

    @if(Session::has('flash_message_error'))
                    <div class="alert alert-error alert-block">
                        <button type="button" class="close" data-dismiss="alert">x</button>
                            <strong>{!! session('flash_message_error') !!} </strong>
                    </div>
                @endif

                @if(Session::has('flash_message_success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">x</button>
                            <strong>{!! session('flash_message_success') !!} </strong>
                    </div>
                @endif


    <table id="example" class="table table-striped table-bordered" style="width:100%">
    
        
        <thead>
            <tr>
              <!--  <th>Order Id</th>-->
                <th>Customer Id</th>
                <th>Product Id</th>
                
                <th>Color</th>
                <th>Size</th>
                <th>Quantaty</th>
                <th>unit Price</th>
                <th>Sub Total</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
            <tr>
              <!--  <td>{{ $order->id }}</td>-->
                <td>{{ $order->cus_id }}</td>
                <td>{{ $order->product_id }}</td>
                
                <td>{{ $order->color}}</td>
                <td>{{ $order->size }}</td>
                <td>{{ $order->qty }}</td>
                <td>{{ $order->unitprice }}</td>
                <td>{{ $order->subtotal }}</td>
                
            </tr>
            @endforeach
            
        </tbody>
        <tfoot>
        <tr>
      <!--  <th>Order Id</th>-->
                <th>Customer Id</th>
                <th>Product Id</th>
                
                <th>Color</th>
                <th>Size</th>
                <th>Quantaty</th>
                <th>unit Price</th>
                <th>Sub Total</th>
                
                
            </tr>
        </tfoot>
    </table>











</div>



@endsection 