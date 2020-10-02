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
                <th>First Name</th>
                
                <th>Last Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Contact No</th>
                
                
            </tr>
        </thead>
        <tbody>
            @foreach($customers as $customer)
            <tr>
              
                <td>{{ $customer->id }}</td>
                <td>{{ $customer->fname }}</td>
                
                <td>{{ $customer->lname}}</td>
                <td>{{ $customer->email }}</td>
                <td>{{ $customer->address}}</td>
                <td>{{ $customer->contactno }}</td>
                
            </tr>
            @endforeach
            
        </tbody>
        <tfoot>
        <tr>
      <!--  <th>Order Id</th>-->
      <th>Customer Id</th>
                <th>First Name</th>
                
                <th>Last Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Contact No</th>
                
            </tr>
        </tfoot>
    </table>











</div>



@endsection 