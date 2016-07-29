@extends('admin/admin_template')

@section('content')

<div class="box box-default">
    <div class="box-header with-border">
        <div class='row'>
            <div class='col-md-9'>
                <h2 class="box-title">Register Farmers</h2>
            </div>
            <div class="col-md-3">
<!--                 <div id="custom-search-input">
                    <div class="input-group col-md-12">
                        <input type="text" class="form-control input-sm" placeholder="Search farmer by crop" />
                        <span class="input-group-btn">
                            <button class="btn btn-info btn-sm" type="button">
                                <i class="glyphicon glyphicon-search"></i>
                            </button>
                        </span>
                    </div>
                </div> -->
            </div>
        </div>



        <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
            <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
        </div><!-- /.box-tools -->
    </div><!-- /.box-header -->
    <div class="box-body">
        <div class='col-md-6 col-md-offset-3'>
          <h2>Register Farmers</h2>
                 <form role="form">
      <div class="box-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Full name</label>
          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
      </div>        <div class="form-group">
          <label for="exampleInputEmail1">Gender</label>
          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
      </div>        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
      </div>        <div class="form-group">
          <label for="exampleInputEmail1">Phone Number</label>
          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
      </div>        <div class="form-group">
          <label for="exampleInputEmail1">State</label>
          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
      </div>        <div class="form-group">
          <label for="exampleInputEmail1">LGA</label>
          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
      </div>        <div class="form-group">
          <label for="exampleInputEmail1">Village</label>
          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
      </div>        <div class="form-group">
          <label for="exampleInputEmail1">Farm Size</label>
          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
      </div>        <div class="form-group">
          <label for="exampleInputEmail1">Crop</label>
          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
      </div>
      <div class="form-group">
          <label for="exampleInputPassword1">NO of pack</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
      </div> <div class="form-group">
          <label for="exampleInputPassword1">Used before</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
      </div>
<!--       <div class="form-group">
          <label for="exampleInputFile">File input</label>
          <input type="file" id="exampleInputFile">
          <p class="help-block">Example block-level help text here.</p>
      </div>
      <div class="checkbox">
          <label>
            <input type="checkbox"> Check me out
        </label>
    </div> -->
</div><!-- /.box-body -->

<div class="box-footer">
    <button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>
        </div>
</div>
        <!--- content Ends------->
    </div><!-- /.box-body -->
</div><!-- /.box -->
@stop 