@extends('layouts.app')

@section('content')
@if(session()->has('success'))
              <div class="center" style="text-align: center;">
                    <div class="alert alert-success">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                            </button>
                        <strong>Notification</strong> {{ session()->get('success') }}
                    </div>
                </div>
            @endif



<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Your Comment</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form id="comment-form" method="post" action="{{ route('comments.store') }}" >
                        {{ csrf_field() }}
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" >
                        <div class="row" style="padding: 10px;">
                            <div class="form-group">
                                <textarea class="form-control" name="comment" placeholder="Write something from your heart..!"></textarea>
                            </div>
                        </div>
                        <div class="row" style="padding: 0 10px 0 10px;">
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary btn-lg" style="width: 100%" name="submit">
                            </div>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>

    <div class="row">
         <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Discussion Fourm</div>

                <div class="panel-body comment-container" >
                    
                    @if(count($comments)>0)
                        @foreach($comments as $comment)
                        <div class="well">
                            <i><b> {{ $comment->fname }} </b></i>&nbsp;&nbsp;
                            <span> {{ $comment->comment }} </span>
                            <div style="margin-left:10px;">
                                
                                <div class="reply-form">
                                    
                                 
                                    
                                </div>
                                
                                
                            </div>
                        </div>
                    @endforeach
                    
                    @else
                    No comments
                    @endif

                    

                </div>
            </div>
        </div>
    </div>

   

</div>
@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="{{ asset('/js/main.js') }}">
  
</script>


