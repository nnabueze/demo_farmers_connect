<!DOCTYPE HTML>
<!--
	Horizons by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
<head>
	<title>Farmers Connect</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
	<link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{ asset('css/animate.min.css')}}" rel="stylesheet"> 
        <link href="{{ asset('css/font-awesome.min.css')}}" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
	<script src="{{ asset('template/js/jquery.min.js')}}"></script>
	<script src="{{ asset('template/js/jquery.dropotron.min.js')}}"></script>
	<script src="{{ asset('template/js/skel.min.js')}}"></script>
	<script src="{{ asset('template/js/skel-layers.min.js')}}"></script>
	<script src="{{ asset('template/js/init.js')}}"></script>
	<link rel="stylesheet" href="{{ asset('template/css/skel.css')}}" />
	<link rel="stylesheet" href="{{ asset('template/css/style.css')}}" />
	<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
</head>
<body class="no-sidebar">

	<!-- Header -->
	<div id="header">
		<div class="container">

			<!-- Logo -->
			<h1><a href="{{action('FarmerController@index')}}" id="logo">Farmers Connect</a></h1>

			<!-- Nav -->
			<nav id="nav">
				<ul>
					<li><a href="{{action('FarmerController@index')}}">Home</a></li>
					<li><a href="{{action('FarmerController@create')}}">Farmers Registration</a></li>
				</ul>
			</nav>

		</div>
	</div>

	<!-- Main -->
	<div id="main" class="wrapper style1">
		<div class="container">
			<div class="col-md-6 col-md-offset-3">
			
				<header class="major">
					<h2>Registration</h2>
					<span class="byline">Integer sit amet pede vel arcu aliquet pretium</span>
				</header>
				@include('errors.error')
				@include('include.message')
				@unless(Session::has('message'))

					{!! Form::open(['method' => 'POST', 'action'=> ['FarmerController@store']]) !!}
					<div class="form-group">
						{!! Form::label('Full Name','Full Name:')!!}
						{!! Form::text('full_name',null,['class'=>'form-control','placeholder'=>'Please enter full name']) !!}
					</div>					
					<div class="form-group">
						{!! Form::label('email','Email:')!!}
						{!! Form::text('email',null,['class'=>'form-control','placeholder'=>'Please enter email']) !!}
					</div>
					<div class="form-group">
						{!! Form::label('Phone','Phone:')!!}
						{!! Form::text('phone',null,['class'=>'form-control','placeholder'=>'Please enter phone']) !!}
					</div>
				<!-- 	<div class="form-group">
						{!! Form::label('surname','Surname:')!!}
						{!! Form::text('surname',null,['class'=>'form-control','placeholder'=>'Please enter surname']) !!}
					</div> -->
					<div class="form-group">
                        {!! Form::label('Gender','Gender:')!!}
                        <select name="gender" class="form-control" id="state">
                        	 <option value="">select Gender</option>
                            <option value="m">Male</option>
                            <option value="f">Female</option>
                        </select>
                    </div>
					<div class="form-group">
                        {!! Form::label('state','State:')!!}
                        <select name="state" class="form-control" id="state">
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
						{!! Form::label('LGA','LGA:')!!}
						{!! Form::text('lga',null,['class'=>'form-control','placeholder'=>'Please enter LGA']) !!}
					</div>
					<div class="form-group">
						{!! Form::label('village','Village:')!!}
						{!! Form::text('village',null,['class'=>'form-control','placeholder'=>'Please enter village']) !!}
					</div>
					<div class="form-group">
						{!! Form::label('farm_size','Farm Size:')!!}
						{!! Form::text('farm_size',null,['class'=>'form-control','placeholder'=>'Please enter farm size']) !!}
					</div>
					<div class="form-group">
						{!! Form::label('no_of_pack','No of Pack:')!!}
						{!! Form::text('no_of_pack',null,['class'=>'form-control','placeholder'=>'Please enter No of Pack']) !!}
					</div>
					<div class="form-group">
						{!! Form::label('Longitude','Longitude:')!!}
						{!! Form::text('longitude',null,['class'=>'form-control','placeholder'=>'Please enter longitude']) !!}
					</div>
					<div class="form-group">
						{!! Form::label('Latitude','Latitude:')!!}
						{!! Form::text('latitude',null,['class'=>'form-control','placeholder'=>'Please enter latitude']) !!}
					</div>
					<div class="form-group">
						{!! Form::label('Crop Type','Crop Type:')!!}
						{!! Form::text('crop_type',null,['class'=>'form-control','placeholder'=>'Please enter crop type']) !!}
					</div>
					<button type="submit" name="submit" class="btn btn-primary">Register</button>
					{!! Form::close()!!}
					@endunless
			
			</div>
		</div>
	</div>

	<!-- Footer -->
	<div id="footer">
		<div class="container">

			<!-- Lists -->
			<div class="row">
				<div class="8u">
					<section>
						<header class="major">
							<h2>Donec dictum metus</h2>
							<span class="byline">Quisque semper augue mattis wisi maecenas ligula</span>
						</header>
						<div class="row">
							<section class="6u">
								<ul class="default">
									<li><a href="#">Pellentesque elit non gravida blandit.</a></li>
									<li><a href="#">Lorem ipsum dolor consectetuer elit.</a></li>
									<li><a href="#">Phasellus nibh pellentesque congue.</a></li>
									<li><a href="#">Cras vitae metus aliquam  pharetra.</a></li>
								</ul>
							</section>
							<section class="6u">
								<ul class="default">
									<li><a href="#">Pellentesque elit non gravida blandit.</a></li>
									<li><a href="#">Lorem ipsum dolor consectetuer elit.</a></li>
									<li><a href="#">Phasellus nibh pellentesque congue.</a></li>
									<li><a href="#">Cras vitae metus aliquam  pharetra.</a></li>
								</ul>
							</section>
						</div>
					</section>
				</div>
				<div class="4u">
					<section>
						<header class="major">
							<h2>Donec dictum metus</h2>
							<span class="byline">Mattis wisi maecenas ligula</span>
						</header>
						<ul class="contact">
							<li>
								<span class="address">Address</span>
								<span>1234 Somewhere Road #4285 <br />Nashville, TN 00000</span>
							</li>
							<li>
								<span class="mail">Mail</span>
								<span><a href="#">someone@untitled.tld</a></span>
							</li>
							<li>
								<span class="phone">Phone</span>
								<span>(000) 000-0000</span>
							</li>
						</ul>	
					</section>
				</div>
			</div>

			<!-- Copyright -->
			<div class="copyright">
				Design: <a href="http://templated.co">TEMPLATED</a> Images: <a href="http://unsplash.com">Unsplash</a> (<a href="http://unsplash.com/cc0">CC0</a>)
			</div>

		</div>
	</div>

</body>
</html>