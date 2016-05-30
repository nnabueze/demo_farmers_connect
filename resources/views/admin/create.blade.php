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
   
 <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h1 class="text-center">Create A User</h1>
        </div>
    </div>
    <br />
    <br />
    <div class="col-md-4 col-md-offset-4">
        @include('errors.error')
        @include('include.message')
       
    </div>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            {!! Form::open(['action'=>'UserController@store','role'=>'form'])!!}

            <div class="col-sm-10 col-sm-offset-1">
                <div style="margin-bottom: 25px" class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    <input type="text" class="form-control" name="name" value="" placeholder="Full Name..">                                        
                </div>
            </div>

            <div class="col-sm-10 col-sm-offset-1">
                <div style="margin-bottom: 25px" class="input-group">
                    <span class="input-group-addon">@</span>
                    <input type="email" class="form-control" name="email" value="" placeholder=" email">                                        
                </div>
            </div>


            <div class="col-sm-10 col-sm-offset-1">
                <div style="margin-bottom: 25px" class="input-group">
                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                    <input type="password" class="form-control" name="password" value="" placeholder="Enter Password">                                        
                </div>
            </div>

            <div class="col-sm-10 col-sm-offset-1">
                <div style="margin-bottom: 25px" class="input-group">
                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                    <input type="password" class="form-control" name="password_confirmation" value="" placeholder="Confirm Password">                                        
                </div>
            </div>
            <div class="col-sm-10 col-sm-offset-1">
                <div style="margin-bottom: 25px" class="input-group">
                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                    <input type="text" class="form-control" name="phone" value="" placeholder="Enter Phone">                                        
                </div>
            </div>


            <div class="col-sm-10 col-sm-offset-1">
                <select class="form-control" name="role" style="margin-bottom: 25px" >

                    <option>Select Option</option>
                    <option value="admin">Admin</option>
                    <option value="user">User</option>

                </select>
            </div>
            <div class="col-sm-4 col-sm-offset-8">
                <div style="margin-bottom: 25px" class="input-group">
                    <button class="btn btn-primary btn-block" name="save">Register</button>                                        
                </div>
            </div>



            {!! Form::close()!!}
        </div>
    </div>
     
        </div>
        <!--- content Ends------->
    </div><!-- /.box-body -->
</div><!-- /.box -->

@stop