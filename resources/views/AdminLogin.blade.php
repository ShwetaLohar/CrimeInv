<!DOCTYPE html>
 <html>
    <head>
        <title>Login</title>
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
          <h3 align="center">Login</h3><br />
          <h2></h2>

         

          <form method="post" action="{{ url('/main/checklogin')}}">
            {{ csrf_field() }}
            <div class="form-group">
              <label>Enter Username</label>
              <input type="text" name="username" class="form-control" />
            </div>
            
            <div class="form-group">
              <label>Enter Password</label>
              <input type="password" name="password" class="form-control" />
            </div>

            @if(isset(Auth::user()->username))
            <script>window.location="/main";</script>
            @endif
            
            @if($message = Session::get('error'))
            <div class="alert alert-danger alert-block">
              <button type="button" class="close" data-dismiss="alert">x</button>
              <strong>{{  $message  }}</strong>
            </div>
            @endif

            
            @if (count($errors) > 0)
          <div class="alert alert-danger">
            <ul>
              @foreach($errors->all() as $error)
              <li> {{ $error }} </li>
              @endforeach
            </ul>
          </div>
          @endif

          @if (\Session::has('success'))
          <div class="alert alert-success">
            <p>{{\Session::get('success')}}</p>
          </div>
          @endif
          {{csrf_field()}} 

             <div class="form-group">
              <input type="submit" name="login" class="btn btn-primary btn-block"  value="Login" />
            </div>
          </form>
      </div>
  </body>
</html>
        







      




