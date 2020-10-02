@extends('layouts.adminLayout.admin_desing')
@section('content')





<div class="payments">    
 


    

    
    <h1>Payment Details</h1> 
    
    

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
                <th>Payment Id</th>
                <th>customer Id</th>
                <th>Amount</th>
                <th>Date</th>
                <th>Invoice No</th>
                <th>Payment Method</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach($payments as $payment)
            <tr>
                <td>{{ $payment->payment_id }}</td>
                <td>{{ $payment->cus_id }}</td>
                <td>{{ $payment->amount }}</td>
                <td>{{ $payment->date }}</td>
                <td>{{ $payment->payment_invoice_no }}</td>
                <td>{{ $payment->pay_method }}</td>
                s
            </tr>
            @endforeach
            
        </tbody>
        <tfoot>
            <tr>
                <th>Payment Id</th>
                <th>customer Id</th>
                <th>Amount</th>
                <th>Date</th>
                <th>Invoice No</th>
                <th>Payment Method</th>
                
            </tr>
        </tfoot>
    </table>











</div>



@endsection 