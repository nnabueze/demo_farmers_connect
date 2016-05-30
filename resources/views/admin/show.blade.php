@extends('admin/admin_template')

@section('content')
<div class="box box-default">
    <div class="box-header with-border">
        <h3 class="box-title">List Registered Users</h3>
        <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
            <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
        </div><!-- /.box-tools -->
    </div><!-- /.box-header -->
    <div class="box-body">

        @if($user)
        <div class="col-md-8 col-md-offset-2">
                    <table class='table'>
            <tr><td>Passport:</td><td><img src="{{asset("uploads/".$user->images['filename'])}}" height="200px" width="170px" alt="" /></td></tr>
            <tr><td>Transact Id:</td><td>{{$user->transaction_id}}</td></tr>
            <tr><td>Surname:</td><td>{{$user->surname}}</td></tr>
            <tr><td>First Name:</td><td>{{$user->first_name}}</td></tr>
            <tr><td>Date of Birth:</td><td>{{$user->date_of_birth}}</td></tr>
            <tr><td>Place of Birth:</td><td>{{$user->place_of_birth}}</td></tr>
            <tr><td>State of Origin:</td><td>{{$user->state_of_birth}}</td></tr>
            <tr><td>Contact Address:</td><td>{{$user->contact_address}}</td></tr>
            <tr><td>Email:</td><td>{{$user->email}}</td></tr>
            <tr><td>Phone:</td><td>{{$user->contact_phone}}</td></tr>
            <tr><td>BBM Pin:</td><td>{{$user->BBM_pin}}</td></tr>
            <tr><td>Complexion:</td><td>{{$user->complexion}}</td></tr>
            <tr><td>Hair Colour:</td><td>{{$user->hair_colour}}</td></tr>
            <tr><td>Eye Colour:</td><td>{{$user->eye_colour}}</td></tr>
            <tr><td>Height:</td><td>{{$user->height}}</td></tr>
            <tr><td>Weight:</td><td>{{$user->weight}}</td></tr>
            <tr><td>Burst:</td><td>{{$user->burst}}</td></tr>
            <tr><td>Hips:</td><td>{{$user->hips}}</td></tr>
            <tr><td>Occupation:</td><td>{{$user->occupation}}</td></tr>
            <tr><td>Student:</td><td>{{$user->student}}</td></tr>
            <tr><td>Course of study:</td><td>{{$user->course_of_study}}</td></tr>
            <tr><td>Working As:</td><td>{{$user->working_as}}</td></tr>
            <tr><td>Religion:</td><td>{{$user->religion}}</td></tr>
            <tr><td>Language Speaking:</td><td>{{$user->language_speaking}}</td></tr>
            <tr><td>Describe Yourself:</td><td>{{$user->describe_yourself}}</td></tr>
            <tr><td>Peagent:</td><td>{{$user->pagent}}</td></tr>
            <tr><td>Hobbies:</td><td>{{$user->hobbies}}</td></tr>
            <tr><td>Best Dish:</td><td>{{$user->best_dish}}</td></tr>
            <tr><td>Role Model:</td><td>{{$user->role_model}}</td></tr>
            <tr><td>Why Model:</td><td>{{$user->why_model}}</td></tr>
            <tr><td>Favourite Colour:</td><td>{{$user->favourite_colour}}</td></tr>
            <tr><td>Favourite Outfit:</td><td>{{$user->favourite_outfit}}</td></tr>
            <tr><td>Favourite Book:</td><td>{{$user->favourite_book}}</td></tr>
            <tr><td>Favourite author :</td><td>{{$user->favourite_author}}</td></tr>
            <tr><td>Favourite Music:</td><td>{{$user->favourite_music}}</td></tr>
            <tr><td>Favourite Movie:</td><td>{{$user->favourite_movie}}</td></tr>
            <tr><td>Favourite Actor:</td><td>{{$user->favourite_actor}}</td></tr>
            <tr><td>Favourite Musician:</td><td>{{$user->favourite_musician}}</td></tr>
            <tr><td>pagent Reason:</td><td>{{$user->pagent_reason}}</td></tr>
            <tr><td>Contestant:</td><td>{{$user->contestant}}</td></tr>
            <tr><td>Win pagent:</td><td>{{$user->win_pagent}}</td></tr>
            <tr><td>HIV:</td><td>{{$user->hiv}}</td></tr>
            <tr><td>child Abuse:</td><td>{{$user->child_abuse}}</td></tr>
            <tr><td></td><td></td></tr>
            <tr><td></td><td><a href="{{action('AdminController@listUsers')}}" class="btn btn-success"><small>Back</small></a></td></tr>
        </table>
        </div>
        @endif
    </div>
    <!--- content Ends------->
</div><!-- /.box-body -->
</div><!-- /.box -->

@stop