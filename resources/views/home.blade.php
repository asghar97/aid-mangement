<!DOCTYPE html>
<html lang="en">
  <head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>AID MANAGEMENT</title>

    <script type="text/javascript" src="{{url('/')}}/public/template_assets/jquery/dist/jquery.min.js"></script>
    <link rel="stylesheet" href="{{url('/')}}/public/template_assets/bootstrap/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{url('/')}}/public/template_assets/custom.min.css" />
    <link rel="stylesheet" href="{{url('/')}}/public/template_assets/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" />
    <link rel="stylesheet" href="{{url('/')}}/public/template_assets/bootstrap-datepicker/css/bootstrap-datetimepicker.min.css" />
    <link rel="stylesheet" href="{{url('/')}}/public/template_assets/font-awesome/css/font-awesome.min.css" />

    <link rel="stylesheet" href="{{url('/')}}/public/template_assets/autocomplete/jquery-auto-complete.css">
    <script type="text/javascript" src="{{url('/')}}/public/template_assets/autocomplete/jquery-auto-complete.js"></script>

    <link href="{{url('/')}}/public/images/logo/favicon.png" type="image/x-icon" rel="shortcut icon">

  </head>

  <body class="nav-md">

    <div class="container body">
      <div class="main_container">

      <?php $image = Auth::user()->image; ?>

      <!-- Full Sidebar -->
        
        @include('admin.sidebar')

        @include('admin.header')

        <div class="right_col" role="main">
       
            @yield('content')

       
    </div>

    <script type="text/javascript" src="{{url('/')}}/public/template_assets/bootstrap/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{url('/')}}/public/template_assets/custom.min.js"></script>
    <script type="text/javascript" src="{{url('/')}}/public/template_assets/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

    <!-- <script type="text/javascript" src="https://sicpapakistan.com.pk/admin/public/template_assets/font-awesome/css/font-awesome.min.css"></script> -->

  </body>
</html>