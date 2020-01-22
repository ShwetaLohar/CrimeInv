<header class="navbar navbar-expand-lg navbar-dark bg-dark text-light fixed-top">
	<!-- <div id="logo">
		<img src="logo.png"/>
	</div> -->
	<h3>Crime Investigation</h3>
	<link rel="stylesheet" type="text/css" href="css/basic.css">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    	<span class="navbar-toggler-icon text-secondary"></span>
  	</button>
    <div id="navbarNav" class="navbar-collapse collapse">
      	<ul class="nav navbar-nav">
      		@if (Auth::id() == 1)
      		<li class="nav-item">
		      <a class="nav-link" href="{{route('addcase')}}">Add Case</a>
		    </li>
		    <li class="nav-item">
		      <a class="nav-link" href="{{route('addofficer')}}">Add Officer</a>
		    </li>
		    <li class="nav-item">
		      <a  class="nav-link" href="{{route('caseofficer')}}">Add Case Officer</a>
		    </li>
		     <li class="nav-item">
		      <a class="nav-link" href="">Predict Result</a>
		    </li>
		    <li class="nav-item">
		      <a class="nav-link" href="{{route('addresult')}}">Add Result</a>
		    </li>
		     <li class="nav-item">
		      <a class="nav-link" href="">View Suspects</a>
		    </li>
		     <li class="nav-item">
		      <a class="nav-link" href="">View Case History</a>
		    </li>
		     <li class="nav-item">
		      <a class="nav-link" href="{{route('home')}}">Logout</a>
		    </li>
		    @endif
      	</ul>
    </div>
</header>
		
