@extends('app')
@section('content')
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <h2 class="text-center">Registration Successful</h2>
        <p>Dear {{$user->surname}} {{$user->first_name}}</p>
        <p>You have successfully registered for MBGA, Please find below your details.</p>
        <p>Transaction ID: {{$user->transaction_id}}</p>
        <p>Email: {{$user->email}}</p>
        <p>Phone: {{$user->contact_phone}}</p>
    </div>
</div>
@stop