@extends('app')

@section('content')
<div class="row">
    <div class="col-md-4 col-md-offset-4">
   @if($errors->all())
   <ul class=""alert alert-danger">
        @foreach($errors->all() as $error)
        <li >
            {!! $error !!}
        </li>
        @endforeach
   </ul>
   @endif
   
  <!-- resources/views/auth/login.blade.php -->

<!-- resources/views/auth/register.blade.php -->

<form role='form' method="POST" action="/auth/register">
    {!! csrf_field() !!}

    <div class="form-group">
        Name
        <input class="form-control" type="text" name="name" value="{{ old('name') }}">
    </div>

    <div class="form-group">
        Email
        <input type="email" class="form-control" name="email" value="{{ old('email') }}">
    </div>

    <div class="form-group">
        Password
        <input type="password" class="form-control" name="password">
    </div>

    <div class="form-group">
        Confirm Password
        <input type="password" class="form-control" name="password_confirmation">
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-success">Register</button>
    </div>
</form>
    </div>
</div>

@stop