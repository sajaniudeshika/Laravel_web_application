@extends('layouts.adminLayout.admin_desing')
@section('content')





<div class="viewAdvertistment">

    

    
    <h1>Designs</h1>
   <!-- <form action="{{ url('/search-products') }}" method="post" > 
    {{ csrf_field() }}
     <input type="text" placeholder="search product"  name="product"/>
    <button type="submit" style="border:0px; height:33px; margin-left: 3px">Go</button>
    </form> --> 



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
                <th>Desing Id</th>
                <th>Description</th>              
                <th>Size</th>
                <th>Quantity</th>
                <th>Colour</th>
                <th>Metirial</th>
                <th>Order Date</th>
               
            </tr>
        </thead>


        <tbody>
            @foreach($designs as $design)
            <tr>
                <td>{{ $design->id }}</td>
                <td>{{ $design->desctiption }}</td>
                <td>{{ $design->size }}</td>
                <td>{{ $design->quantity }}</td>
                <td>{{ $design->color }}</td>
                <td>{{ $design->metirial }}</td>
                <td>{{ $design->orderDate }}</td>
                
                <td>
                    @if(!empty($design->image))
                    <img src="{{ asset('images/'.$design->image) }}" style="width:100px; hight:100px;" ></td>
                    @endif
                

               
            @endforeach
            
        </tbody>
        <tfoot>
            <tr>
                 <th>Desing Id</th>
                <th>Description</th>              
                <th>Size</th>
                <th>Quantity</th>
                <th>Colour</th>
                <th>Metirial</th>
                <th>Order Date</th>
            </tr>
        </tfoot>
    </table>






    




</div>



@endsection 