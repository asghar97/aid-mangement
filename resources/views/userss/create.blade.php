@extends('home')
@section('content')

<div class="row">
   <div class="col-md-12 col-xs-12">
   		@include('flash_msgs')
   </div>
</div>

<div class="row">
   <div class="col-md-12 col-xs-12">
      <div class="x_panel">
         <div class="x_title">
             <h1 style="color: #000;font-size: 32px;">Create Users</h1>
                <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">
          
					{!! Form::open([ 'url' => 'userss', 'method' => 'post', 'files' => true ]) !!}

              <div class="row">

                <div class="form-group col-md-6 col-sm-6 col-xs-12" style="margin-top: 1%">
                {!! Form::label("username", "Username:", ["class" => "control-label"]) !!}
                {!! Form::text("username", null, ["class" => "form-control","id"=>"txt_box"]) !!}
                </div>

                <div class="form-group col-md-6 col-sm-6 col-xs-12" style="margin-top: 1%">
                {!! Form::label("name", "Name:", ["class" => "control-label"]) !!}
				        {!! Form::text("name", null, ["class" => "form-control"]) !!}
                </div>

                <div class="form-group col-md-6 col-sm-6 col-xs-12" style="margin-top: 1%">
                {!! Form::label("email", "Email:", ["class" => "control-label"]) !!}
				        {!! Form::text("email", null, ["class" => "form-control"]) !!}
                </div>

                <div class="form-group col-md-6 col-sm-6 col-xs-12" style="margin-top: 1%">
                {!! Form::label("password", "Password:", ["class" => "control-label"]) !!}
                <input id="password" type="password" class="form-control" name="password">
                </div>

                <div class="form-group col-md-6 col-sm-6 col-xs-12" style="margin-top: 1%">
                {!! Form::label("user_type", "User type:", ["class" => "control-label"]) !!}
        				<select name="user_type" class="form-control">
        				 	<option value="">Please Select</option>
        				  	<option value="admin">Admin</option>
        				</select>
                </div>

                <div class="form-group col-md-6 col-sm-6 col-xs-12" style="margin-top: 1%">
                {!! Form::label("image", "Image:", ["class" => "control-label"]) !!}
				        <input type="file" name="image" class="form-control btn btn-primary">
                </div>

                </div>
          
                <div class="row">
                <div class="form-group col-md-6 col-sm-6 col-xs-12" style="margin-top: 1%">
                {!! Form::submit('Create', ['class' => 'btn btn-info']) !!}
                </div>

                </div>

                {!! Form::close() !!}

              </div>
         </div>
    </div>
</div>

<script>
 
$(function(){
 
  $('#txt_box').keyup(function()
  {
    var yourInput = $(this).val();

    console.log(yourInput);

    re = /[`~!@#$%^&*()_|+\-=?;:'",.<>\{\}\[\]\\\/]/gi;
    var isSplChar = re.test(yourInput);
    if(isSplChar)
    {
      var no_spl_char = yourInput.replace(/[`~!@#$%^&*()_|+\-=?;:'",.<>\{\}\[\]\\\/]/gi, '');

      console.log("Aaaa");

      $(this).val(no_spl_char);
    }
  });
 
});
 
</script>
@endsection