@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

             <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="text-center">{{ Auth::user()->fname }}'s Payment Details</h2>
                </div>
            
                <table class="table table-hover">
                    <tr>
                    <th>Amount</th>
                    <th>Date</th>
                    <th>Payment Invoice Number</th>
                    <th>Payment Method</th>
                    
                    </tr>
                    @foreach ($users as $user)
                    <tr>
                    <td>{{ $user->amount }}</td>
                    <td>{{ $user->date }}</td>
                    <td>{{ $user->payment_invoice_no }}</td>
                    <td>{{ $user->pay_method }}</td>
                    
                    </tr>
                    @endforeach
                </table>
                                    

            </div>
            
        </div>
           
    </div>
</div>
@endsection
