<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>{{$title}}</title>
        <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{ asset('css/animate.min.css')}}" rel="stylesheet"> 
        <link href="{{ asset('css/font-awesome.min.css')}}" rel="stylesheet">
        <link href="{{ asset('css/lightbox.css')}}" rel="stylesheet">
        <link href="{{ asset('css/main.css')}}" rel="stylesheet">
        <link id="css-preset" href="{{ asset('css/presets/preset1.css')}}" rel="stylesheet">
        <link href="{{ asset('css/responsive.css')}}" rel="stylesheet">

        <!--[if lt IE 9]>
          <script src="{{ asset('js/html5shiv.js')}}"></script>
          <script src="{{ asset('js/respond.min.js')}}"></script>
        <![endif]-->

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
        <link rel="shortcut icon" href="images/favicon.ico">
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
                            <li class="scroll"><a href="{{action('RegisterController@about')}}">About Us</a></li>
                            <li class="scroll"><a href="{{action('RegisterController@contact')}}">Contact</a></li> 
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

        <section id="twitter" class="parallax">
            <div>
                <a class="twitter-left-control" href="#twitter-carousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="twitter-right-control" href="#twitter-carousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2">
                            <div class="twitter-icon text-center">
                                <h4>HOW TO APPLY</h4>
                                <p></p>
                            </div>
                            <div id="twitter-carousel" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="item active wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                                        <p>1)&nbsp;Go To ANY BANK NATIONWIDE </p>
                                    </div>
                                    <div class="item">
                                        <p>2)&nbsp;Pay N5,000.00 to Dolce Entertainment Limited </p>
                                    </div>
                                    <div class="item">                                
                                        <p>3)&nbsp;Visit www.mbga2016.com to register</p>
                                    </div>
                                    <div class="item">                                
                                        <p>4)&nbsp;Click on Register and enter Payment Reference Number from the Bank slip issued after payment</p>
                                    </div>
                                    <div class="item">                                
                                        <p>5)&nbsp;Fill & submit the form via www.mbga2016.com </p>
                                    </div>
                                    <div class="item">                                
                                        <p>6)&nbsp;Print out your submitted form for verification. </p>
                                    </div>
                                </div>                        
                            </div>                    
                        </div>
                    </div>
                </div>
            </div>
        </section><!--/#twitter-->  


        <section>
            <div class="container">

                <div class="text-center">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <p>Enter your bank reference number</p>
                                </div>
                                <div class="panel-body">
                                    @include('include.message')
                                    @include('include.warning')
                                    @include('errors.error')
                                    {!! Form::open(['action'=>'ErcasController@index', 'role'=>'form','class'=>'form-inline'])!!}
                                    <!--RegisterController@login-->
                                    <div class="col-sm-10 col-sm-offset-1">
                                        <div class="form-group">
                                            <label for="email">Reference Id:</label>
                                            <input type="text" class="form-control" name='transaction_id' id="role" placeholder="Enter reference number">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>



                                    {!! Form::close()!!}
                                </div>
                            </div>

                        </div>


                    </div>
                </div>
            </div>
        </section><!--/#services-->






        <footer id="footer">
            <div class="footer-top wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                <div class="container text-center">
                    <div class="footer-logo">
                        <a href="{{action('RegisterController@index')}}"><img class="img-responsive" src="{{ asset('image/logo1.png')}}" alt=""></a>
                    </div>
                    <div class="social-icons">
                        <ul>
                            <li><a class="envelope" href="#"><i class="fa fa-envelope"></i></a></li>
                            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li> 
                            <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a class="tumblr" href="#"><i class="fa fa-tumblr-square"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <p>&copy; 2016 Dolce Entertainment.</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="pull-right">Crafted by <a href="http://ercasng.com/">Ercas Solution Limited</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

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

    </body>
</html>