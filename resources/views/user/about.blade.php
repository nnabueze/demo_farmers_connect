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

        <section id="about-us" class="parallax">
            <div class="container">
                <div class="row">
                    <p> &nbsp;&nbsp;</p>
                    <p> &nbsp;&nbsp;</p>
                    <p> &nbsp;&nbsp;</p>
                </div>
        </section><!--/#about-us-->


        <section>
            <div class="container">

                
                    <div class="row text-justify">
                     <div class="col-md-12">

                        <h2>ABOUT US</h2>
                        <p>The MBGA is a beauty pageant organized annually by Dolce Entertainment Limited in the Federal Capital of Abuja. The pageant has been in existence for over Fifteen (15) years and has gained good reputation throughout the federation.
                            This year’s edition shall be the 16th  and promises to be the most glamorous one of all.</p>
                        <p>The objective of the pageant is to produce world class pageant and models who shall be the ambassadors of our great country Nigeria outside the shores of this country. Indeed  the  show  has  produced  many  of  such  models  and
                            some  of  our previous winners/contestants have made stunning appearances at other pageants within and outside Nigeria. We are also determined to showcase Nigeria cultural heritage such as dance and dress at the international arena.</p>
                        <p>From the inception of the pageant to date, we have received collaboration and sponsorship from various corporate bodies including<strong> ERCAS INTEGRATED SOLUTIONS LIMITED</strong>, the Nigerian Breweries Plc (AMSTEL MALTA), CHIMA MOVIE EMPIRE U.S.A, Visafone,  Nafdac,  DAAR  Communications  Owners  of  AIT/Ray  Power
                            100.5FM, NTA Plus, AM Express, ITV, DBN Television, Hot FM, Cool FM, Gem Electronic Board, The Sun Newspaper, This Day Newspaper, High  Society Magazine, Chapters  Digital, Arik  Air, Chanchangi-Airline,
                            Transcorp Hilton, Abuja Sheraton Hotel & Towers, Sandralia Hotel, Randekhi Gold Hotel Benin, Lona Global Resource,Faereen Designs, Option A Media, Gabriel Oyibode Foundation, Empress Njanmah Foundation, Top
                            Rank Hotel Galaxy, 3J’s Hotel, Chida Hotels, Febson Hotel, Nicon Luxury, Nanet Suites, Studio 24, Mattson Creatives Studio, VODI Tailors, Shola
                            Creative   Studio,   Bnatural,   Dreswel   Ventures   Limited,   I’AM,   Doxa, Eat.Com, Drumstix, Tetrazzini Foods Limited, Aqua Nite Club, Basement Nite Club, Cubana Lounge, Kryxtal Lounge, Denis Hotels, Agura Hotel,
                            Chancellery Suites etc.
                        </p>

                        <p><strong>MISSION:</strong> We are created to promote the great image of our country
                            Nigeria to the fullest.
                        </p>
                        <p><strong>VISSION: </strong>To up hold the values of our traditional and cultural heritage.</p>
                        <p><strong>OUR DRIVE:</strong></p>
                        <ul>
                            <li>In the light of social emancipation and curbing of youth vices.</li>
                            <li>Also responding to a wake up call to focus the youths in activities that will empower them.</li>
                            <li>In a bid to help some youth realize their potentials and areas of fame and best representations</li>
                            <li>Our drive circles round these social responsibilities.</li>
                        </ul>
                        <p><strong>MEDIA PUBLICITY: </strong>we are open to accept any Nigerian media organizations that can publizes the activities of the event nationwide.</p>
                        <p></p><br />
                        <p><strong>REGISTRATION</strong></p>
                        <p><strong>Bank details: </strong>ANY BANK NATIONWIDE</p>
                        <p><strong>ACC. NAME:</strong> DOLCE ENTERTAINMENT LTD.</p>
                        <p>Contestant’s forms: N5, 000 only</p>
                        <p></p><br />
                        <p><strong>NAMES OF PAST QUEENS:</strong></p>
                        <p>2001- GLORIA JULIUS</p>
                        <p>2002- BINTA AGU</p>
                        <p>2003- STEPHINE ISEAKO</p>
                        <p>2004- ESTHER OKORO</p>
                        <p>2005- GLORIA OKORO</p>
                        <p>2006- PRINCESS OFILI</p>
                        <p>2007- GRACE NDAM</p>
                        <p>2008- UDEME USORO</p>
                        <p>2009- DEBORAH ENEBELI</p>
                        <p>2010- CHIOMA EZENWA</p>
                        <p>2011- STELLA CHARLES</p>
                        <p>2012 - CHINELO CHUKWURA</p>
                        <p>2013 –ESTHER OBIAGELI</p>
                        <p>2014- VOILET OKWUAZU</p>
                        <p>2015- REIGNING QUEEN- QUEEN DEBBIE DOUGLAS</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">

                        <p><strong>DONATIONS:</strong>All interested individuals and corporate companies who wish to support our event pet project in cash or kind should let us know, it accepted by Dolce Entertainment Limited by calling us for discussions as fast as possible. 08034523698, 08051774413, 07026272670. 0r send us an e-mail: info@mbgaevents.com, dolceentertainmentng@yahoo.com</p>
                        <p><strong>SPONSORSHIP:</strong> all interested organizations are welcome on board to be part of the 2016 edition of the Most Beautiful Girl in Abuja Beauty Pageant show. Call the following numbers for detailed considerations. 08034523698,
                            08051774413, 07026272670. 0r send us an e-mail:
                            info@mbga2016.com, dolceentertainmentng@yahoo.com
                        </p>
                        <p>
                            <strong>PARTNERS:</strong> we are open for all corporate partnership in media and other areas in the promotions of the 13th edition of the mbga event. 08034523698,
                            08051774413, 07026272670. 0r send us an e-mail:
                            info@mbga2016.com, dolceentertainmentng@yahoo.com

                        </p>
                        <p><strong>FOR  SPONSORSHIP  AND  ADVERT  PLACEMENT  CONTACT  US  @  NO.  8
                                BIRNIN KEBBI STREET GARKI 2 NEAR IQ ACADEMY.
                                CALL OUR LINES: 0803-4523698, 0805-1774413. 0r send us an e-mail:
                                info@mbga2016.com, dolceentertainmentng@yahoo.com
                            </strong></p>
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
