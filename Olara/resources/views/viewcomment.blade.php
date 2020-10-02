@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

             <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="text-center">View Comment</h2>
                </div>
            
                <table class="table table-hover">
                    <tr>
                    <th>Name</th>
                    <th>Comment</th>
                   
                    
                    </tr>
                    @foreach ($comments as $comment)
                    <tr>
                    <td>{{ $comment->fname}}</td>
                    <td>{{ $comment->comment }}</td>
                    
                    
                    </tr>
                    @endforeach
                </table>
                                    

            </div>
            
        </div>
           
    </div>
</div>
@endsection
