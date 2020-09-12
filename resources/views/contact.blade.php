
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Contact</title>
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

    <style>
      .invalid-feedback{
        display: block;
      }

    </style>



  </head>
  <body>
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">CRIME INVESTIGATION MANAGEMENT SYSTEM</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="{{route('home')}}" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="{{route('about')}}" class="nav-link">About Us</a></li>
	          
	          <li class="nav-item"><a href="https://www.indiatoday.in/crime" class="nav-link">News</a></li>
	          <li class="nav-item active"><a href="{{route('contact')}}" class="nav-link">Contact</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('frontEnd') }}/images/ab.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
            <h1 class="mb-3 bread">Contact Us</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="{{route('home')}}">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact Us <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

   	
    <section class="ftco-section contact-section">
      <div class="container">
     
       <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="h3">Contact Information</h2>
          </div>
          <div class="w-100"></div>
          <div class="col-md-3">
            <p><span>Address:</span> Mumbai, India</p>
          </div>
          <div class="col-md-3">
            <p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
          </div>
          <div>
            <p><span>Email:</span> <a href="mailto:shwetackt49@gmail.com">shwetackt49@gmail.com</a></p>
          </div>
          
        </div>
        <div class="row block-9">
          <div class="col-lg-6 order-md-last d-flex">
           


            <form action="{{ route('contact.store')}}"  method="post" class="bg-light p-5 contact-form">
             {{ csrf_field() }}

              <div class="form-group">
                <input type="text" name="name" value="" class="form-control" placeholder="Your Name">

                @if($errors->has('name'))
                 <small class="form-text invalid-feedback">{{ $errors->first('name')  }}</small>
                 @endif

              </div>

              <div class="form-group">
                <input type="text" name="email" value="" class="form-control" placeholder="Your Email">
                @if($errors->has('email'))
                 <small class="form-text invalid-feedback">{{ $errors->first('email')  }}</small>
                 @endif
              </div>

               <!-- <div class="form-group">
                <input type="text" name="subject" value="" class="form-control" placeholder="Subject">

                @if($errors->has('subject'))
                 <small class="form-text invalid-feedback">{{ $errors->first('subject')  }}</small>
                 @endif

              </div> -->

              <div class="form-group">
                <textarea name="message" id="" cols="30" rows="7" value="" class="form-control" placeholder="Message"></textarea>
                @if($errors->has('message'))
                 <small class="form-text invalid-feedback">{{ $errors->first('message')  }}</small>
                 @endif
              </div>

              <div class="form-group">
                <input type="submit" name="submit" value="Send Message" class="btn btn-primary py-3 px-5">
              </div>

            </form>
          @if (Session::has('flash_message'))
          <div class="alert alert-success">{{Session::get('flash_message')}}</div>
          @endif
          

          </div>

          <div class="col-lg-6 d-flex">
          	<div id="map" class="bg-white"></div>
          </div>
        </div>
      </div>
    </section>

   

    <footer class="ftco-footer ftco-bg-dark ftco-section p-3 border border-top">
      <center>
      
            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
   Copyright&copy; 2020 Shweta Lohar - All Rights Reserved <i class="icon-heart color-danger" aria-hidden="true"></i><a href="https://colorlib.com" target="_blank"></a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
        </center>  
    </footer>
    
  

  <!-- loader -->
 <!--  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
 -->

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