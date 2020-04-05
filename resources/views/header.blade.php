<html lang="en">
<head>
	
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Crime Investigation</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" type="text/css" href="css/home.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
</head>
<body>

	<nav class="navbar navbar-expand-md bg-dark navbar-dark  navbar-top">
    <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header fixed-brand">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"  id="menu-toggle">
                      <span class="glyphicon glyphicon-th-large" aria-hidden="true"></span>
                    </button>
                    <a href="" class="navbar-brand text-warning font-weight-bold"><i class="fa fa-legal fa-4"></i> CRIME INVESTIGATION MANAGEMENT SYSTEM</a>
                </div><!-- navbar-header-->
 
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                                <li class="active" ><button class="navbar-toggle collapse in" data-toggle="collapse" id="menu-toggle-2"> <span class="glyphicon glyphicon-th-large" aria-hidden="true"></span></button></li>
                            </ul>
                </div><!-- bs-example-navbar-collapse-1 -->
    </nav>

    <div id="wrapper">
        
        <div id="sidebar-wrapper">

            <ul class="sidebar-nav nav-pills nav-stacked" id="menu"> 

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
		      <a class="nav-link" href="{{route('predict')}}">Predict Result</a>
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
		      <a class="nav-link" href="{{route('predict')}}">Predict Result</a>
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
		      <a class="nav-link" href="{{route('crimehistory')}}">View Criminal History</a>
		    </li>
		     <li class="nav-item">
		      <a class="nav-link" href="{{route('logout')}}">Logout</a>
		    </li>
		    @endif 
                
            </ul>
            </div>


   
</div>
    
    <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
    
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script type="text/javascript">
	

	$("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
     $("#menu-toggle-2").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled-2");
        $('#menu ul').hide();
    });
 
     function initMenu() {
      $('#menu ul').hide();
      $('#menu ul').children('.current').parent().show();
      //$('#menu ul:first').show();
      $('#menu li a').click(
        function() {
          var checkElement = $(this).next();
          if((checkElement.is('ul')) && (checkElement.is(':visible'))) {
            return false;
            }
          if((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
            $('#menu ul:visible').slideUp('normal');
            checkElement.slideDown('normal');
            return false;
            }
          }
        );
      }
    $(document).ready(function() {initMenu();});

    
</script>
</body>
</html>


