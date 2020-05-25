<nav class="navbar navbar-expand-lg navbar-dark  bg-dark ftco-bg-dark ftco-navbar-light" id="ftco-navbar">
	<div class="container">
	<!-- <h3>Crime Investigation</h3> -->
	

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
  	
  	<div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
    <!-- <div id="navbarNav" class="navbar-collapse collapse" -->
    	
      	<!-- <ul class="nav navbar-nav"> -->

      		@if (Session::get('isAdmin') == 'true')
      		<li class="nav-item active">
		      <a class="nav-link" href="{{route('addcase')}}">Add Case</a>
		    </li>
		    <li class="nav-item">
		      <a class="nav-link" href="{{route('addofficer')}}">Add Officer</a>
		    </li>
		    <li class="nav-item">
		      <a  class="nav-link" href="{{route('caseofficer')}}">Add Case Officer</a>
		    </li>

		     <li class="nav-item">
		      <a class="nav-link" href="{{route('offhistory')}}">Officer History</a>
		    </li>

		    <li class="nav-item">
		      <a class="nav-link" href="{{route('addresult')}}">Add Result</a>
		    </li>
		     <li class="nav-item">
		      <a class="nav-link" href="{{route('viewsuspect')}}">View Suspects</a>
		    </li>
		     <li class="nav-item">
		      <a class="nav-link" href="{{route('v_evidences')}}">View Evidences</a>
		    </li>
		    <li class="nav-item">
		      <a class="nav-link" href="{{route('crimehistory')}}">Criminal History</a>
		    </li>
		     <li class="nav-item">
		      <a class="nav-link" href="{{route('logout')}}">Logout</a>
		    </li>
		    @else

		     <li class="nav-item">
		      <a class="nav-link" href="{{route('offhistory')}}">Officer History</a>
		    </li>
		    <li class="nav-item">
		      <a class="nav-link" href="{{route('addsuspect')}}">Add Suspect</a>
		    </li>

		    <li class="nav-item">
		      <a class="nav-link" href="{{route('addevidence')}}">Add Evidence</a>
		    </li>
		    
		    <li class="nav-item">
		      <a class="nav-link" href="{{route('viewsuspect')}}">View Suspects</a>
		    </li>
		     <li class="nav-item">
		      <a class="nav-link" href="{{route('v_evidences')}}">View Evidences</a>
		    </li>
		     <li class="nav-item">
		      <a class="nav-link" href="{{route('crimehistory')}}">Criminal History</a>
		    </li>
		     <li class="nav-item">
		      <a class="nav-link" href="{{route('logout')}}">Logout</a>
		    </li>
		    @endif

      	</ul>
    </div>
</div>
</nav>
