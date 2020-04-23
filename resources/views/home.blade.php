<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link href="https://fontawesome.io/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
 
</head>
<body>

	<header class="navbar navbar-expand-md bg-dark navbar-dark navbar-top">
		
		<div class="container">
			<a href="" class="navbar-brand text-warning font-weight-bold"> CRIME INVESTIGATION MANAGEMENT SYSTEM</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsenavbar">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse text-centre" id="collapsenavbar">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"> 
						<a href="" class="nav-link text-white">HOME &nbsp;&nbsp;</a>
					</li>
					<li class="nav-item"> 
						<a href="#about" class="nav-link text-white">ABOUT &nbsp;&nbsp;</a>
					</li>
				</ul>
			</div>
		</div>
	</header>

	<div class="bgimg">
		<div class="container text-center text-white hearderset">
			<h2>"Nothing matters but the facts. Without them, the science of criminal investigation is nothing more than a guessing game"</h2>
			<h1>Welcome!!!</h1>
			<button class="btn btn-warning text-white btn-lg" onclick="window.open('/main')">Login</button>&nbsp;&nbsp;&nbsp;&nbsp;
			<!-- <button class="btn btn-warning text-white btn-lg" onclick="window.open('/offlogin')">Officer </button> -->
		</div>
	</div>

	<section id="about" class="container aboutus text-center p-5">
     <h2>About Us</h2>
      <hr>
      <p style="line-height: 50px">
      	"Crime Investigation Management System" is a tracker system,that tracks the investigation status of criminal status.It is an advance system that allows crime investigation teams from various cities or states on a particular case to work together on the case by sharing evidences and also the progress on a particular case.
      </p>
  </section>

	<footer class="p-3 border border-top">
		<center>
			<p>&copy; Copyright 2019 Shweta Lohar - All Rights Reserved</p>
		</center>
	</footer>

</body>
</html>
			