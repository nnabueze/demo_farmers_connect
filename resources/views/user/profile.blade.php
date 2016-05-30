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
        <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-76469133-1', 'auto');
            ga('send', 'pageview');

        </script>

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
                        <a class="navbar-brand hidden-sm hidden-xs" href="{{action('RegisterController@index')}}">
                            <h1><img class="img-responsive" src="../image/logo1.png" alt="logo"></h1>
                        </a>                    
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">                 
                            <li class="scroll"><a href="{{action('RegisterController@index')}}">Home</a></li> 
                            <li class="scroll "><a href="{{action('RegisterController@about')}}">About Us</a></li>
                            <li class="scroll "><a href="{{action('RegisterController@contact')}}">Contact</a></li>       
                            <li class="scroll"><a href="{{action('RegisterController@gallery')}}">Gallery</a></li> 
                            <li>
                            <a href="{{action('RegisterController@mbga')}}">MBGA Nigeria</a>
                        </li>
                            <?php if (Session::get('key')): ?>
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
                    <h1 class="page-header">Form

                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="{{action('RegisterController@index')}}">Home</a>
                        </li>
                        <li class="active">Form</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <h1 class="text-center">Registration Form</h1>
                </div>
            </div><!----End of 1st div --->
            <br />
            <div class="row">
                <div class="col-md-12">
                    @include('errors.error')
                    @include('include.message')
                    @include('include.warning')

                </div>
            </div>

            <br />
            <div class="row">
                {!! Form::open(['method' => 'POST', 'action'=> ['RegisterController@profileUpdate']]) !!}
                <div class="col-md-6 ">
                    <div class="form-group">
                        {!! Form::label('surname','Surname:')!!}
                        {!! Form::text('surname',$profile->surname,['class'=>'form-control','placeholder'=>'Please enter surname']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('first_name','First Name:')!!}
                        {!! Form::text('first_name',$profile->first_name,['class'=>'form-control','placeholder'=>'Please enter first name']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('date of birth','Date of Birth:')!!}
                        {!! Form::text('date_of_birth',$profile->date_of_birth,['class'=>'form-control','id' => 'datepicker','placeholder'=>'Year-Month-Day']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('place_of_birth','Place of Birth:')!!}
                        {!! Form::text('place_of_birth',$profile->place_of_birth,['class'=>'form-control','placeholder'=>'Please enter place of birth']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('state_of_birth','State of Origin:')!!}
                        <select name="state_of_birth" class="form-control" id="state">
                            <option value=" ">Select State of Origin</option>
                            <option value="ABUJA FCT">ABUJA FCT</option>
                            <option value="ABIA">ABIA</option>
                            <option value="ADAMAWA">ADAMAWA</option>
                            <option value="AKWA IBOM">AKWA IBOM</option>
                            <option value="ANAMBRA">ANAMBRA</option>
                            <option value="BAUCHI">BAUCHI</option>
                            <option value="BAYELSA">BAYELSA</option>
                            <option value="BENUE">BENUE</option>
                            <option value="BORNO">BORNO</option>
                            <option value="CROSS RIVER">CROSS RIVER</option>
                            <option value="DELTA">DELTA</option>
                            <option value="EBONYI">EBONYI</option>
                            <option value="EDO">EDO</option>
                            <option value="EKITI">EKITI</option>
                            <option value="ENUGU">ENUGU</option>
                            <option value="GOMBE">GOMBE</option>
                            <option value="IMO">IMO</option>
                            <option value="JIGAWA">JIGAWA</option>
                            <option value="KADUNA">KADUNA</option>
                            <option value="KANO">KANO</option>
                            <option value="KATSINA">KATSINA</option>
                            <option value="KEBBI">KEBBI</option>
                            <option value="KOGI">KOGI</option>
                            <option value="KWARA">KWARA</option>
                            <option value="LAGOS">LAGOS</option>
                            <option value="NASSARAWA">NASSARAWA</option>
                            <option value="NIGER">NIGER</option>
                            <option value="OGUN">OGUN</option>
                            <option value="ONDO">ONDO</option>
                            <option value="OSUN">OSUN</option>
                            <option value="OYO">OYO</option>
                            <option value="PLATEAU">PLATEAU</option>
                            <option value="RIVERS">RIVERS</option>
                            <option value="SOKOTO">SOKOTO</option>
                            <option value="TARABA">TARABA</option>
                            <option value="YOBE">YOBE</option>
                            <option value="ZAMFARA">ZAMFARA</option>
                        </select>
                    </div>

                    <div class="form-group">
                        {!! Form::label('contact_address','Contact Address:')!!}
                        {!! Form::textarea('contact_address',$profile->contact_address,['class'=>'form-control','']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('email','Email Address:')!!}
                        {!! Form::email('email',$profile->email,['class'=>'form-control','']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('contact_phone','Contact Phone:')!!}
                        {!! Form::text('contact_phone',$profile->contact_phone,['class'=>'form-control','']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('BBM_pin','BBM pin:')!!}
                        {!! Form::text('BBM_pin',$profile->BBM_pin,['class'=>'form-control','']) !!}
                    </div><!--- end of part 1--->



                    <div class="form-group">
                        {!! Form::label('complexion','Complexion:')!!}
                        {!! Form::text('complexion',$profile->complexion,['class'=>'form-control','']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('hair_colour','Hair Colour:')!!}
                        {!! Form::text('hair_colour',$profile->hair_colour,['class'=>'form-control','']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('eye_colour','Eye Colour:')!!}
                        {!! Form::text('eye_colour',$profile->eye_colour,['class'=>'form-control','']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('height','Height:')!!}
                        {!! Form::text('height',$profile->height,['class'=>'form-control','']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('weight','Weight:')!!}
                        {!! Form::text('weight',$profile->weight,['class'=>'form-control','']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('burst','Burst:')!!}
                        {!! Form::text('burst',$profile->burst,['class'=>'form-control','']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('waist','Waist:')!!}
                        {!! Form::text('waist',$profile->waist,['class'=>'form-control','']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('hips','Hips:')!!}
                        {!! Form::text('hips',$profile->hips,['class'=>'form-control','']) !!}
                    </div><!--- End of part 2--->




                    <div class="form-group">
                        {!! Form::label('occupation','Occupation:')!!}
                        {!! Form::text('occupation',$profile->occupation,['class'=>'form-control','']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('student','If Student, Where?:')!!}
                        {!! Form::text('student',$profile->student,['class'=>'form-control','']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('course_of_study','Course of Study, Dept/Level:')!!}
                        {!! Form::text('course_of_study',$profile->course_of_study,['class'=>'form-control','']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('working_as','Working As:')!!}
                        {!! Form::text('working_as',$profile->working_as,['class'=>'form-control','']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('religion','Religion:')!!}
                        {!! Form::text('religion',$profile->religion,['class'=>'form-control','']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('language_speaking','Language Speaking:')!!}
                        <select name="language_speaking" class="form-control" id="language">
                            <option value=" ">Select language speaking</option>
                            <option value="English">English</option>
                            <option value="Igbo">Igbo</option>
                            <option value="Yoruba">Yoruba</option>
                            <option value="Hausa">Hausa</option>
                        </select>
                    </div><!--- end of part 3 --->

                    <div class="form-group">
                        {!! Form::label('describe_yourself','Briefly Describe Yourself:') !!}
                        {!! Form::textarea('describe_yourself',$profile->describe_yourself,['class'=>'form-control','']) !!}
                    </div>





                </div>
                <!----- end of first part of the form--->


                <div class="col-md-6 ">
                    <div class="form-group">
                        {!! Form::label('pagent','Have you participated in any beauty pagent? if yes, State pagent and year:')!!}
                        {!! Form::text('pagent',$profile->pagent,['class'=>'form-control','']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('hobbies','Hobbies:')!!}
                        {!! Form::text('hobbies',$profile->hobbies,['class'=>'form-control','']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('best_dish','Best Dish:')!!}
                        {!! Form::text('best_dish',$profile->best_dish,['class'=>'form-control','']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('role_model','Who is your Role Model:')!!}
                        {!! Form::text('role_model',$profile->role_model,['class'=>'form-control','']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('why_model','Why?:')!!}
                        {!! Form::text('why_model',$profile->why_model,['class'=>'form-control','']) !!}
                    </div><!--- end of part 4--->

                    <div class="form-group">
                        {!! Form::label('favourite_colour','Favourite Colour:')!!}
                        {!! Form::text('favourite_colour',$profile->favourite_colour,['class'=>'form-control','']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('favourite_outfit','Favourite Outfit:')!!}
                        {!! Form::text('favourite_outfit',$profile->favourite_outfit,['class'=>'form-control','']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('favourite_book','Favourite Book:')!!}
                        {!! Form::text('favourite_book',$profile->favourite_book,['class'=>'form-control','']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('favourite_author','Favourite Author:')!!}
                        {!! Form::text('favourite_author',$profile->favourite_author,['class'=>'form-control','']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('favourite_movie','Favourite Movie:')!!}
                        {!! Form::text('favourite_movie',$profile->favourite_movie,['class'=>'form-control','']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('favourite_actor','Favourite Actor/Actress:')!!}
                        {!! Form::text('favourite_actor',$profile->favourite_actor,['class'=>'form-control','']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('favourite_music','Favourite Type of Music:')!!}
                        {!! Form::text('favourite_music',$profile->favourite_music,['class'=>'form-control','']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('favourite_musician','Favourite Musician:')!!}
                        {!! Form::text('favourite_musician',$profile->favourite_musician,['class'=>'form-control','']) !!}
                    </div><!--- end of part 5--->


                    <div class="form-group">
                        {!! Form::label('pagent_reason','Why did you enter for this pagent?:')!!}
                        {!! Form::textarea('pagent_reason',$profile->pagent_reason,['class'=>'form-control','']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('contestant','If you ara a judge, what will you ask the contestant:')!!}
                        {!! Form::text('contestant',$profile->contestant,['class'=>'form-control','']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('win_pagent','Why do you think you can win this pagent?:')!!}
                        {!! Form::textarea('win_pagent',$profile->win_pagent,['class'=>'form-control','']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('hiv','What is your opinion about people leaving with HIV/AIDS?:')!!}
                        {!! Form::textarea('hiv',$profile->hiv,['class'=>'form-control','']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('child_abuse','What is your opinion about Child labour, Woman trafficking and Child abuse?:')!!}
                        {!! Form::textarea('child_abuse',$profile->child_abuse,['class'=>'form-control','']) !!}
                    </div><!--- end of part 6---->
                    <button type="submit" name="submit" class="btn btn-primary">Register</button>

                </div><!----- end of second part of the form--->
                {!! Form::close()!!}
            </div><!--- End of second row -->

            <hr>

            <!-- Footer -->
            <footer>
                <div class="row">
                    <div class="col-lg-12">
                        <p>Copyright &copy; Dolce Entertainment 2016</p>
                    </div>
                </div>
            </footer>

        </div>
        <!-- /.container -->

        <!-- jQuery -->
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/js/select2.min.js"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

        <!-- jQuery -->
        <script src="{{ asset('js/jquery.js')}}"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="{{ asset('js/bootstrap.min.js')}}"></script>

        <script type="text/javascript">
            $(function () {
                $("#datepicker").datepicker({dateFormat: 'yy-mm-dd'});


            });

            $('#language').select2();
            $('#state').select2();

        </script>

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