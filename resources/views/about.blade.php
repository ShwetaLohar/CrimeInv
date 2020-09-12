<!DOCTYPE html>
<html lang="en">
  <head>
    <title>About</title>
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
    <link rel="stylesheet" href="font/flaticon.css">
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
            <li class="nav-item active"><a href="{{route('about')}}" class="nav-link">About Us</a></li>
            
            <li class="nav-item"><a href="https://www.indiatoday.in/crime" class="nav-link">News</a></li>
            <li class="nav-item" ><a href="{{route('contact')}}" class="nav-link">Contact</a></li>
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
            <h1 class="mb-3 bread">About Us</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="{{route('home')}}">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>About Us<i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    
    <section class="ftco-counter" id="section-counter">
      <div class="container-fluid">
        <div class="row d-flex">
          <div class="col-md-6 d-flex">
            <div class="img d-flex align-self-stretch align-items-center justify-content-center" style="background-image:url({{ asset('frontEnd') }}/images/ab2.jpg);">
              <!-- <a href="https://vimeo.com/45830194" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
                <span class="icon-play"></span>
              </a> -->
            </div>
          </div>
          <div class="col-md-6 px-5 py-5">
            <div class="row justify-content-start pt-3 pb-3">
              <div class="col-md-12 heading-section ftco-animate">
                <span class="subheading">Criminal Facts</span>
                <h2 class="mb-4">Preserving the peace of every citizen!</h2>
              </div>
            </div>
            <div class="row">

              <div class="col-md-6 justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center py-4 bg-light mb-4">
                  <div class="text">
                    <div class="icon d-flex justify-content-center align-items-center">
                      <span class="flaticon-police-handcuffs"></span>
                    </div>
                    <strong class="number" data-number="1890">0</strong>
                    <span>Crimes</span>
                  </div>
                </div>
              </div>
             
              <div class="col-md-6 justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center py-4 bg-light mb-4">
                  <div class="text">
                    <div class="icon d-flex justify-content-center align-items-center">
                      <span class="flaticon-thief"></span>
                    </div>
                    <strong class="number" data-number="1963">0</strong>
                    <span>Robbery</span>
                  </div>
                </div>
              </div>
              <div class="col-md-6 justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center py-4 bg-light mb-4">
                  <div class="text">
                    <div class="icon d-flex justify-content-center align-items-center">
                      <span class="flaticon-car-accident"></span>
                    </div>
                    <strong class="number" data-number="1632">0</strong>
                    <span>Accidents</span>
                  </div>
                </div>
              </div>
              <div class="col-md-6 justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center py-4 bg-light mb-4">
                  <div class="text">
                    <div class="icon d-flex justify-content-center align-items-center">
                      <span class="flaticon-hostage"></span>
                    </div>
                    <strong class="number" data-number="8000">0</strong>
                    <span>Kidnapping</span>
                  </div>
                </div>
              </div>
            </div>
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