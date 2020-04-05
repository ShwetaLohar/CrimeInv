<!DOCTYPE html>
 <html>
    <head>
        <title>Admin Login</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <style type="text/css">
          .box{
            width:600px;
            margin:0 auto;
            border: 1px solid #ccc;
          }
        </style>
      </head>
      <body>
        <br />
        <br><br><br><br>
        <div class="container box">
          <h3 align="center">Admin Login </h3><br />

          @if(isset(Auth::user()->username))
          <div class="alert alert-danger success-block">
            <strong>Welcome {{ Auth::user()->username }}</strong>
            <br />
            <a href="{{ url('/main/logout') }}">Logout</a>
          </div>
         
          <script>window.location="/main";</script>
         
          @endif

          <br />
        </div>
      </body>
      </html>
       