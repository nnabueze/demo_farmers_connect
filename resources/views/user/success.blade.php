<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>{{$title}}</title>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/css/select2.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

        <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{ asset('css/animate.min.css')}}" rel="stylesheet"> 
        <link href="{{ asset('css/font-awesome.min.css')}}" rel="stylesheet">
        <link href="{{ asset('css/lightbox.css')}}" rel="stylesheet">
        <link id="css-preset" href="{{ asset('css/presets/preset1.css')}}" rel="stylesheet">
        <link href="{{ asset('css/responsive.css')}}" rel="stylesheet">
        <link href="{{ asset('css/style1.css')}}" rel="stylesheet">

        <!--[if lt IE 9]>
          <script src="{{ asset('js/html5shiv.js')}}"></script>
          <script src="{{ asset('js/respond.min.js')}}"></script>
        <![endif]-->

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
        <link rel="shortcut icon" href="images/favicon.ico">
       
        <style>
            body {

                background: url(../image/DSC_0142x.jpg);
                padding-bottom: 90px;

            }
            .navbar-right li a {
                color: #fff;
                text-transform: uppercase;
                font-size: 14px;
                font-weight: 600;
                padding-top: 30px;
                padding-bottom: 30px;
            }

            .navbar-right li.active a {
                background-color: rgba(0,0,0,.2);
            }

            .navbar-brand h1 {
                margin-top: 5px;
            }
            .preloader {
                position: fixed;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                z-index: 999999;
                background: #fff;
            }

            .preloader > i {
                position: absolute;
                font-size: 36px;
                line-height: 36px;
                top: 50%;
                left: 50%;
                height: 36px;
                width: 36px;
                margin-top: -15px;
                margin-left: -15px;
                display: inline-block;
            }
            .navbar-nav li a:hover, 
.navbar-nav li a:focus {
  outline:none;
  outline-offset: 0;
  text-decoration:none;  
  background: transparent;
}
        </style>
    </head><!--/head-->

    <body>

        <!--.preloader-->
        <div class="preloader"> <i class="fa fa-circle-o-notch fa-spin"></i></div>
        <!--/.preloader-->

        <header id="home">

            <div class="main-nav">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.html">
                            <h1><img class="img-responsive" src="../image/logo1.png" alt="logo"></h1>
                        </a>                    
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">                 
                            <li class="scroll"><a href="{{action('RegisterController@index')}}">Home</a></li> 
                            <li class="scroll "><a href="{{action('RegisterController@about')}}">About Us</a></li>
                            <li class="scroll "><a href="{{action('RegisterController@contact')}}">Contact</a></li>       
                            <li class="scroll"><a href="{{action('RegisterController@gallery')}}">Gallery</a></li>       
                            <?php if (Session::get('key')): ?>
                            <li>
                                <a href="{{action('RegisterController@create')}}">Form</a>
                            </li>
                                <li>
                                    <a href="{{action('RegisterController@success')}}">Print Form</a>
                                </li>
                                <li>
                                    <a href="{{action('RegisterController@logout')}}">Logout</a>
                                </li>
                            <?php else: ?>
                                <li>
                                    <a href="{{action('RegisterController@show')}}">Register</a>
                                </li>
                            <?php endif; ?>      
                        </ul>
                    </div>
                </div>
            </div><!--/#main-nav-->
        </header><!--/#home-->

        <!--------------------------------------content start------------------------------->
           <div class="container body-colour1">

            <!-- Page Heading/Breadcrumbs -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Success
                        <small></small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="{{action('RegisterController@index')}}">Home</a>
                        </li>
                        <li class="active">Success</li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->

            <!-- Intro Content -->

            <!-- /.row -->

            <!-- Team Members -->
            <div class="row">
                <div class="col-md-12">
                    @include('include.message')
                    @include('include.warning')
                </div>
            </div>
            @if (!Session::has('warning'))
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="col-md-8 table-responsive">
                                <table class="table">
                                    <tr><td>Identification Number:</td><td>{{$user->transaction_id}}</td></tr>
                                    <tr><td>Name:</td><td>{{ucwords($user->surname)}} {{ucwords($user->first_name)}}</td></tr>
                                    <tr><td>Date of Birth:</td><td>{{$user->date_of_birth}}</td></tr>
                                    <tr><td>Place of Birth:</td><td>{{ucwords($user->place_of_birth)}}</td></tr>
                                    <tr><td>State of Origin:</td><td>{{ucwords($user->state_of_birth)}}</td></tr>
                                    <tr><td>Contact Address:</td><td>{{ucwords($user->contact_address)}}</td></tr>
                                    <tr><td>Email:</td><td>{{$user->email}}</td></tr>
                                    <tr><td>Contact Phone:</td><td>{{$user->contact_phone}}</td></tr>
                                </table>
                            </div>
                            <div class="col-md-4">

                                <div class="col-md-12">
                                    <img src="{{asset("uploads/".$user->images['filename'])}}" height="200px" width="170px" alt="" />
                                </div>


                                <div class="col-md-12 ">

                                    <button type="button" class="btn btn-success" onClick="window.print()">Print this page</button>                                   

                                </div>

                            </div>
                        </div>

                    </div>

                </div>
                @endif
                <!-- /.row -->

                <!-- Our Customers -->

                <!-- /.row -->

                <hr>

                <!-- Footer -->
                <div class="col-md-12">
                    <footer>
                        <div class="row">
                            <div class="col-lg-12">
                                <p>Copyright &copy; Dolce Entertainment 2016</p>
                            </div>
                        </div>
                    </footer>
                </div>

            </div>

        <!--------------------------------------content end--------------------------------->


        <script type="text/javascript" src="{{ asset('js/jquery.js')}}"></script>
        <script type="text/javascript" src="{{ asset('js/bootstrap.min.js')}}"></script>
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script type="text/javascript" src="{{ asset('js/jquery.inview.min.js')}}"></script>
        <script type="text/javascript" src="{{ asset('js/wow.min.js')}}"></script>
        <script type="text/javascript" src="{{ asset('js/mousescroll.js')}}"></script>
        <script type="text/javascript" src="{{ asset('js/smoothscroll.js')}}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery.countTo.js')}}"></script>
        <script type="text/javascript" src="{{ asset('js/lightbox.min.js')}}"></script>
        <script type="text/javascript" src="{{ asset('js/main.js')}}"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/js/select2.min.js"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>


        <script type="text/javascript">
$(function () {
    $("#datepicker").datepicker({dateFormat: 'yy-mm-dd'});


});

$('#language').select2();
$('#state').select2();

        </script>

    </body>
</html>