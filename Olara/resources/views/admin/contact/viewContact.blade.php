@extends('layouts.adminLayout.admin_desing')
@section('content')





<div class="category">    
 


    

    
    <h1>Contact Us</h1> 
    
    

  <!--  @if(Session::has('flash_message_error'))
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
                -->


    <table id="example" class="table table-striped table-bordered" style="width:100%">
    
    
   
      
        
        <thead>
            <tr>
                <th>ID</th>
                <th>User Name</th>
                <th>User Email</th>
                <th>Subject</th>
                <th>Message</th>
                <th>Action</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach($contact as $Contact)
            <tr>
                <td>{{ $Contact->id }}</td>
                <td>{{ $Contact->name }}</td>
                <td>{{ $Contact->email }}</td>
                <td>{{ $Contact->subject }}</td>
                <td>{{ $Contact->message }}</td>
                <td class="center"><a href="/onemail" class=" btn btn-primary btn-mini">Send Mail</a> 
                                   
                
            </tr>
            @endforeach
            
        </tbody>
        <tfoot>
            <tr>
                <th>ID</th>
                <th>User Name</th>
                <th>User Email</th>
                <th>Subject</th>
                <th>Message</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>











</div>



@endsection 