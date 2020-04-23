<header class="navbar navbar-expand-lg bg-dark text-light fixed-top">
	
	<!-- <h3>Crime Investigation</h3> -->
	<link rel="stylesheet" type="text/css" href="css/basic.css">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    	<span class="navbar-toggler-icon text-secondary"></span>
  	</button>
  	
    <div id="navbarNav" class="navbar-collapse collapse">
    	
      	<ul class="nav navbar-nav">

      		@if (Session::get('isAdmin') == 'true')
      		<li class="nav-item">
		      <a class="nav-link text-white" href="{{route('addcase')}}">Add Case</a>
		    </li>
		    <li class="nav-item">
		      <a class="nav-link text-white" href="{{route('addofficer')}}">Add Officer</a>
		    </li>
		    <li class="nav-item">
		      <a  class="nav-link text-white" href="{{route('caseofficer')}}">Add Case Officer</a>
		    </li>

		     <li class="nav-item">
		      <a class="nav-link text-white" href="{{route('offhistory')}}">Officer History</a>
		    </li>

		     <li class="nav-item">
		      <a class="nav-link text-white" href="{{route('predict')}}">Predict Result</a>
		    </li>
		    <li class="nav-item">
		      <a class="nav-link text-white" href="{{route('addresult')}}">Add Result</a>
		    </li>
		     <li class="nav-item">
		      <a class="nav-link text-white" href="{{route('viewsuspect')}}">View Suspects</a>
		    </li>
		     <li class="nav-item">
		      <a class="nav-link text-white" href="{{route('v_evidences')}}">View Evidences</a>
		    </li>
		     <li class="nav-item">
		      <a class="nav-link text-white" href="{{route('logout')}}">Logout</a>
		    </li>
		    @else

		     <li class="nav-item">
		      <a class="nav-link text-white" href="{{route('offhistory')}}">Officer History</a>
		    </li>
		    <li class="nav-item">
		      <a class="nav-link text-white" href="{{route('addsuspect')}}">Add Suspect</a>
		    </li>

		    <li class="nav-item">
		      <a class="nav-link text-white" href="{{route('addevidence')}}">Add Evidence</a>
		    </li>

		    <li class="nav-item">
		      <a class="nav-link text-white" href="{{route('predict')}}">Predict Result</a>
		    </li>
		    <li class="nav-item">
		      <a class="nav-link text-white" href="{{route('addresult')}}">Add Result</a>
		    </li>
		    
		    <li class="nav-item">
		      <a class="nav-link text-white" href="{{route('viewsuspect')}}">View Suspects</a>
		    </li>
		     <li class="nav-item">
		      <a class="nav-link text-white" href="{{route('v_evidences')}}">View Evidences</a>
		    </li>
		     <li class="nav-item">
		      <a class="nav-link text-white" href="{{route('crimehistory')}}">View Criminal History</a>
		    </li>
		     <li class="nav-item">
		      <a class="nav-link text-white" href="{{route('logout')}}">Logout</a>
		    </li>
		    @endif

      	</ul>
    </div>


</header>