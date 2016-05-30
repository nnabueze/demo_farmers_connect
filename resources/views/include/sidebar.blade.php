      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

          <!-- Sidebar user panel (optional) -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>{{ucwords(Auth::User()->name)}}</p>
              <!-- Status -->
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>

          <!-- search form (Optional) -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->

          <!-- Sidebar Menu -->
          <ul class="sidebar-menu">
            <li class="header">HEADER</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="{{action('AdminController@index')}}"><i class="fa fa-link"></i> <span>Dashboard</span></a></li>
              <li class="treeview">
              <a href="#"><i class="fa fa-link"></i> <span>User Details</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="{{action('AdminController@listUsers')}}">Registered Users</a></li>
<!--                <li><a href="#">Add User</a></li>-->
              </ul>
            </li>
            @if(Auth::User()->role == 'admin')
             <li class="treeview">
              <a href="#"><i class="fa fa-link"></i> <span>Create Admin</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="{{action('UserController@create')}}">Add Admin Users</a></li>
<!--                <li><a href="">List Admin Users</a></li>
                <li><a href="">Role</a></li>-->
              </ul>
            </li>
            @endif
             <li class="active"><a href="{{action('AdminController@logout')}}"><i class="fa fa-link"></i> <span>Signout</span></a></li>
          </ul><!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
      </aside>