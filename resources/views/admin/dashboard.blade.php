@extends('admin/admin_template')
@section('content')
<div class="row">
    <div class="col-xs-4">
        <div class="info-box">
            <!-- Apply any bg-* class to to the icon to color it -->
            <span class="info-box-icon bg-red"><i class="fa fa-star-o"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">No of Registered Users</span>
                <span class="info-box-number">{{count($users)}}</span>
            </div><!-- /.info-box-content -->
        </div><!-- /.info-box -->
    </div>
    <div class="col-xs-4">
        <div class="info-box">
            <!-- Apply any bg-* class to to the icon to color it -->
            <span class="info-box-icon bg-green"><i class="fa fa-star-o"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">No of Bank Payment</span>
                <span class="info-box-number">{{count($ercaspay)}}</span>
            </div><!-- /.info-box-content -->
        </div><!-- /.info-box -->
    </div>

</div>



</div>

@stop