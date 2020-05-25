<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<!-- <link rel="stylesheet" type="text/css" href="css/home.css">
	<-- Latest compiled and minified CSS -->
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('frontEnd') }}/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('frontEnd') }}/css/animate.css">
    
    <link rel="stylesheet" href="{{ asset('frontEnd') }}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('frontEnd') }}/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{ asset('frontEnd') }}/css/magnific-popup.css">

    <link rel="stylesheet" href="{{ asset('frontEnd') }}/css/aos.css">

    <link rel="stylesheet" href="{{ asset('frontEnd') }}/css/ionicons.min.css">

    <link rel="stylesheet" href="{{ asset('frontEnd') }}/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="{{ asset('frontEnd') }}/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="{{ asset('frontEnd') }}/css/flaticon.css">
    <link rel="stylesheet" href="{{ asset('frontEnd') }}/css/icomoon.css">
    <link rel="stylesheet" href="{{ asset('frontEnd') }}/css/style.css">
</head>
<body>

	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="{{route('home')}}">CRIME INVESTIGATION MANAGEMENT SYSTEM</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="{{route('home')}}" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="{{route('about')}}" class="nav-link">About Us</a></li>
	          <li class="nav-item"><a href="{{route('news')}}" class="nav-link">News</a></li>
	          <li class="nav-item"><a href="{{route('contact')}}" class="nav-link">Contact</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <div class="hero-wrap js-fullheight" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-10 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
          	<h2 class="subheading" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">We are here to help!</h2>
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
            	<span>Evidence</span> . <span>Justice</span> . <span>Excellence</span>
            </h1>
            <p><button class="btn btn-warning text-white btn-lg" onclick="window.open('/main')">Login</button></p>
          </div>
        </div>
      </div>
    </div> 

	<!-- <div class="bgimg">
		<div class="container text-center text-white hearderset">
			<h2>"Nothing matters but the facts. Without them, the science of criminal investigation is nothing more than a guessing game"</h2>
			<h1>Welcome!!!</h1>
			<button class="btn btn-warning text-white btn-lg" onclick="window.open('/main')">Login</button>&nbsp;&nbsp;&nbsp;&nbsp; -->
			<!-- <button class="btn btn-warning text-white btn-lg" onclick="window.open('/offlogin')">Officer </button>
		</div>
	</div> -->

	<!-- <section id="about" class="container aboutus text-center p-5">
     <h2>About Us</h2>
      <hr>
      <p style="line-height: 50px">
      	"Crime Investigation Management System" is a tracker system,that tracks the investigation status of criminal status.It is an advance system that allows crime investigation teams from various cities or states on a particular case to work together on the case by sharing evidences and also the progress on a particular case.
      </p>
  </section>
 -->
	 <footer class="ftco-footer ftco-bg-dark ftco-section p-3 border border-top">
      <center>
      
            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
   Copyright&copy; 2020 Shweta Lohar - All Rights Reserved<i class="icon-heart color-danger" aria-hidden="true"></i><a href="https://colorlib.com" target="_blank"></a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
        </center>  
    </footer>

<script src="{{ asset('frontEnd') }}/js/jquery.min.js"></script>
  <script src="{{ asset('frontEnd') }}/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="{{ asset('frontEnd') }}/js/popper.min.js"></script>
  <script src="{{ asset('frontEnd') }}/js/bootstrap.min.js"></script>
  <script src="{{ asset('frontEnd') }}/js/jquery.easing.1.3.js"></script>
  <script src="{{ asset('frontEnd') }}/js/jquery.waypoints.min.js"></script>
  <script src="{{ asset('frontEnd') }}/js/jquery.stellar.min.js"></script>
  <script src="{{ asset('frontEnd') }}/js/owl.carousel.min.js"></script>
  <script src="{{ asset('frontEnd') }}/js/jquery.magnific-popup.min.js"></script>
  <script src="{{ asset('frontEnd') }}/js/aos.js"></script>
  <script src="{{ asset('frontEnd') }}/js/jquery.animateNumber.min.js"></script>
  <script src="{{ asset('frontEnd') }}/js/bootstrap-datepicker.js"></script>
  <script src="{{ asset('frontEnd') }}/js/jquery.timepicker.min.js"></script>
  <script src="{{ asset('frontEnd') }}/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{ asset('frontEnd') }}/js/google-map.js"></script>
  <script src="{{ asset('frontEnd') }}/js/main.js"></script>
    
</body>
</html>
			