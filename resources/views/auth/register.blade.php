<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    {{-- <link rel="shortcut icon" href="img/favicon.png"> --}}

    <title>Register</title>

    <!-- Bootstrap CSS -->    
    <link href="{{asset('hou/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="{{asset('hou/css/bootstrap-theme.css')}}" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="{{asset('hou/css/elegant-icons-style.css')}}" rel="stylesheet" />
    <link href="{{asset('hou/css/font-awesome.css')}}" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="{{asset('hou/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('hou/css/style-responsive.css')}}" rel="stylesheet" />
    <link href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

  <body class="login-img3-body">

    <div class="container">

      {{-- <form class="login-form" action="index.html">     --}}
      <form class="login-form" role="form" method="POST" action="{{ route('register') }}">
        {{ csrf_field() }}    
        <div class="login-wrap">
            <p class="login-img"><i class="icon_lock_alt"></i></p>
            <div class="input-group{{ $errors->has('name') ? ' has-error' : '' }}">
              <span class="input-group-addon"><i class="icon_profile"></i></span>
                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Name" required autofocus>

  
            </div>
            <div>
              @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>
            
            <div class="input-group{{ $errors->has('email') ? ' has-error' : '' }}">
              <span class="input-group-addon"><i class="fa fa-id-card-o"></i></span>
                  <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>

            </div>
            <div>
              @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif  
            </div>



            <div class="input-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                {{-- <input type="password" class="form-control" placeholder="Password"> --}}
                <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>


            </div>
            <div>
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>

            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                {{-- <input type="password" class="form-control" placeholder="Password"> --}}
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required>
            </div>


            <button class="btn btn-primary btn-lg btn-block" type="submit">Register</button>

        </div>
      </form>
    </div>


  </body>
</html>
