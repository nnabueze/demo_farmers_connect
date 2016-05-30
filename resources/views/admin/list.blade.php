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
    <?php $i = 1;?>

        @if($users)
        <table class="table">
            <tr>
                <th>S/N</th>
                <th>Surname</th>
                <th>First Name</th>
                <th>State of Origin</th>
                <th>Phone</th>
                <th>Contact Address</th>
                <th>View More</th>
            </tr>
            @foreach($users as $user)
            <tr>
                <td>{{$i}}</td>
                <td>{{ucwords($user->surname)}}</td>
                <td>{{ucwords($user->first_name)}}</td>
                <td>{{ucwords($user->state_of_birth)}}</td>
                <td>{{$user->contact_phone}}</td>
                <td>{{ucwords($user->contact_address)}}</td>
                <td> <a class="btn btn-primary" href="{{action('AdminController@show',['id'=>$user->id])}}">View <i class="fa fa-sign-in"></i></a></td>
           
            </tr>
            <?php $i++; ?>
            @endforeach
            
        </table>
        @endif
        </div>
        <!--- content Ends------->
    </div><!-- /.box-body -->
</div><!-- /.box -->

@stop