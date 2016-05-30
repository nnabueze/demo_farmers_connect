@extends('admin')

@section('content')
<div class="container">
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
            <div class="panel-heading">Enter Role</div>
            <div class="panel-body">
               @include('include.message')
                {!! Form::open(['action'=>'RoleController@store', 'role'=>'form'])!!}

                <div class="col-sm-10 col-sm-offset-1">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email">Role:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name='name' id="role" placeholder="Enter Role">
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default">Submit</button>
                        </div>
                    </div>
                </div>



                {!! Form::close()!!}
            </div>
        </div>
    </div>
</div>
</div>
@stop