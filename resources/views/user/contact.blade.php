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
                            <li class="scroll "><a href="{{action('RegisterController@about')}}">About Us</a></li>
                            <li class="scroll active"><a href="{{action('RegisterController@contact')}}">Contact</a></li> 
                            <li class="scroll"><a href="{{action('RegisterController@gallery')}}">Gallery</a></li> 
                            <li>
                            <a href="{{action('RegisterController@mbga')}}">MBGA Nigeria</a>
                        </li>
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
        <section id="contact">

            <div id="contact-us" class="parallax">
                <div class="container">
                    <div class="row">
                        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <h2>Contact Us</h2>
                            <p>You can contact us by sending us an email</p>
                        </div>
                    </div>
                    <div class="contact-form wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="row">
                            <div class="col-sm-6">
                                <form id="main-contact-form" name="contact-form" method="post" action="{{action('RegisterController@email')}}">
                                    <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
                                    <div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input type="text" name="name" class="form-control" placeholder="Name" required="required">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input type="email" name="email" class="form-control" placeholder="Email Address" required="required">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="subject" class="form-control" placeholder="Subject" required="required">
                                    </div>
                                    <div class="form-group">
                                        <textarea name="message" id="message" class="form-control" rows="4" placeholder="Enter your message" required="required"></textarea>
                                    </div>                        
                                    <div class="form-group">
                                        <button type="submit" class="btn-submit">Send Now</button>
                                    </div>
                                </form>   
                            </div>
                            <div class="col-sm-6">
                                <div class="contact-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                                    <p>Dolce Entertainment Organizers of Most Beautiful Girl in Abuja</p>
                                    <ul class="address">
                                        <li><i class="fa fa-map-marker"></i> <span> Address:</span> Birnin Kebbi Cres, Abuja, Nigeria </li>
                                        <li><i class="fa fa-phone"></i> <span> Phone:</span> 08034523698, 08051774413, 08033244421  </li>
                                        <li><i class="fa fa-envelope"></i> <span> Email:</span><a href="mailto:info@mbga2016.com"> info@mbga2016.com</a></li>
                                        <li><i class="fa fa-globe"></i> <span> Website:</span> <a href="#">www.mbga2016.com </a></li>
                                    </ul>
                                </div>                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="google-map" class="wow fadeIn" data-latitude="9.024715" data-longitude="7.483930" data-wow-duration="1000ms" data-wow-delay="400ms"></div>
        </section><!--/#contact-->
        <!--------------------------------------content end--------------------------------->
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