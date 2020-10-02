@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Send Email</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{url('/onesend/email')}}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('subject') ? ' has-error' : '' }}">
                            <label for="subject" class="col-md-4 control-label">Subject</label>

                            <div class="col-md-6">
                                <input id="subject" type="text" class="form-control" name="subject" value="{{ old('subject') }}" required autofocus>   
                            </div>
                        </div>

                


                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-4 control-label">Email Address</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}" required autofocus>   
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('message') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Message</label>

                            <div class="col-md-6">
                               <textarea class="form-control" name="message" id="" cols="45" rows="5"> </textarea> 
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Send Email
                                </button>
                            </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
