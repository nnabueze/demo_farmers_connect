@extends('admin')

@section('content')

<div class="row margin-top">
    <div class="col-sm-4 col-sm-offset-4">
        <h2 class="text-center text-success">Dolce Admin registeration Page</h2>
        <br />
        <br />
        <div class="form-login">
            {!! Form::open(['action'=>'LoginController@store','role'=>'form'])!!}
                <h6 class="color-text1">Login Page</h6>
                <div class="form-group">
                    {!! Form::text('email',null,['class'=>'form-control input-sm chat-input','placeholder'=>'Enter valid email address']) !!}
                </div>
                <div class="form-group">
                    {!! Form::input('password','password',null,['class'=>'form-control input-sm chat-input','placeholder'=>'Please enter password']) !!}
                </div>

                
                <div class="wrapper">
                    <span class="group-btn">     
                        <button class="btn btn-primary btn-md" type="submit" name="button" >View <i class="fa fa-sign-in"></i></button>
                    </span>
                </div>
            {!! Form::close()!!}

        </div>
    </div>
</div>
@stop
