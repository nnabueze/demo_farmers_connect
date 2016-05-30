@extends('app')
@section('content')
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <h2 class="text-center">Enquiry</h2>
        <p>Dear Admin</p>
        @if($request->name && $request->email )
        <p>MY name is {{$request->name}} and Email is {{ $request->email }}</p>
        @endif
        @if($request->message)
        <p>MY name is {{$request->message}}</p>
        @endif
       
    </div>
</div>
@stop