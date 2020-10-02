@extends('layouts.master')
@include('partials.header')
@section('title')
    Laravel Shoping Cart
@endsection

@section('content')

        <div class="row">
         <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
            <ul class="list-group">
            
            @foreach($oldCart as $cproduct)
                    <li class="list-group-item">
                    <span class="badge">{{ $cproduct->color }}</span>
                    <span class="badge">{{ $cproduct->size }}</span>
                     <span class="badge">{{ $cproduct->qty }}</span>
                     <span class="label label-success">Product: {{ App\Product::find($cproduct->product_id)->pro_name }}</span>
                     <span class="label label-success">Unit Price: {{ $cproduct->unitprice }}</span>
                     <div class="btn-group">
                        <button type="button" class="btn btn-primary btn-xs dropdown-toogle" data-toggle="dropdown">Action <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                        <!--li><a href='/reduce/cart/{{$cproduct->id}}' class="btn btn-warning btn-xs">Reduce</a></li-->
                            <li><a href="/remove/cart/{{$cproduct->id}}" class="btn btn-danger btn-xs">Remove</a></li>
                        </ul>
                    </div>
                    </li>
            @endforeach
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
           
        </div>
    </div>
    <hr>




    
           <!-- Rs : {{$totalAmoount}} -->



            <?php 

        $api = "http://free.currencyconverterapi.com/api/v5/convert?q=USD_LKR&compact=ultra";
        $value = json_decode(file_get_contents($api),true);
        $rate = $value['USD_LKR'];

          
       
            $rupees = $totalAmoount;
            $dollar= $rupees/$rate;
              //echo " | USD ".(round($dollar,2));







            ?>
            
             




    <div class="row">
        <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
        <div class="text-left">
        <p><b>Total:    Rs {{$totalAmoount}}.00</p>
        </div>
        


      



    <script
            src="https://www.paypal.com/sdk/js?client-id=AU04jMTSN6v7IKNjmdcTNI-pIpXqisd3wgX8YGv-JUILmHJqI5bfA050yymUAYITqLr86q-xG_BXR-ix">
          </script>
  
          <div id="paypal-button-container"></div>
  
          <script>
              paypal.Buttons({
                createOrder: function(data, actions) {
                  return actions.order.create({
                    purchase_units: [{
                      amount: {
              
                        value: "<?php echo (round($dollar,2)); ?>"
                  
                      }
                    }]
                  });
                },
                onApprove: function(data, actions) {
                  return actions.order.capture().then(function(details) {
                    alert('Transaction completed by ' + details.payer.name.given_name);
                    // Call your server to save the transaction
                    return fetch('/paypal-transaction-complete', {
                      method: 'post',
                      headers: {
                        'content-type': 'application/json'
                      },
                      body: JSON.stringify({
                        orderID: data.orderID
                      })
                    });
                  });
                }
              }).render('#paypal-button-container');
            </script>

</div>
        
    </div>



@endsection