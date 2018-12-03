<!DOCTYPE html>
<html lang="en">

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>AID MANAGEMENT</title>

    <script type="text/javascript" src="{{url('/')}}/public/template_assets/jquery/dist/jquery.min.js"></script>
    
    <link rel="stylesheet" href="{{url('/')}}/public/template_assets/bootstrap/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="{{url('/')}}/public/template_assets/custom.min.css">

    <link href="" type="image/x-icon" rel="shortcut icon">

<style type="text/css">
.login_form {
    border: 3px solid #f1f1f1;
    background: #FFF;
    padding: 15px;
    padding-bottom: 0px;
    padding-top: 1px;
}
.btn-danger{
    width: 115px;
  }
  .login_content form input[type="submit"], #content form .submit{
    float: none !important;
  }
  label{
    color: #000;
  }
  .login_content{
    text-shadow: none !important;
  }
  .login_content h1{
    color: #000 !important;
  }
  p{
    color: #000 !important;
    font-size: 10px;
  }
@media (min-width: 360px) {

#logo{
 width:40%;
}

}

@media (min-width: 1000px) {

#logo{
 width:23%;
}

}

.bg {
    background-image: url('public/images/ai-codes-coding-247791.jpg');
    background-repeat: no-repeat;
    background-size: auto;
}
</style>

  </head>

  <body class="login bg">

    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

<div class="logo text-center">
<!-- <a href="http://alisonstech.com" target="_blank">
  <img id="logo" src="{{ asset('public/images/logo/logo.png') }}" alt="" >
</a> -->
</div>

      <div class="login_wrapper">

      <div class="row col-md-12 col-sm-12 col-xs-12">
        
      </div>

      <div class="row col-md-12 col-sm-12 col-xs-12" style="margin-top: 30px">

        <div class="animate form login_form">
          <section class="login_content">

            {{ Form::open(array('url' => 'login')) }}

              <h1>Login Form</h1>
              <div>
                <label>Username *</label>
                <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}">
                @if ($errors->has('username'))
                  <span class="help-block">
                    <strong>{{ $errors->first('username') }}</strong>
                  </span>
                @endif
              </div>

              <div>
                <label>Password *</label>
                <input id="password" type="password" class="form-control" name="password">
                @if ($errors->has('password'))
                  <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                  </span>
                @endif
              </div>

              <div>
                <button type="submit" class="btn btn-danger">
                  <i class="fa fa-btn fa-sign-in"></i> Login
                </button>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">
                  <a href="#signup" class="to_register"> </a>
                </p>

                <div class="clearfix"></div>

                <div>
                
                <p style="font-weight: 700;font-style: normal;text-transform: uppercase;">Copyright © 2018 All Rights Reserved | <a href="javascript:void(0)" title="AID MANAGEMENT" style="color: #009efb;font-weight: 700;font-style: normal;">AID MANAGEMENT</a></p>

                <p style="font-weight: 700;font-style: normal;text-transform: uppercase;">Developed by</p>

                <p><a href="http://alisonstech.com" title="ALISONS TECHNOLOGY" target="_blank" style="color: red;font-weight: 700;font-style: normal;">ALISONS TECHNOLOGY</a></p>

                </div>


              </div>
      
            {{ Form::close() }}

          </section>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>