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
             <h1 style="color: #000;font-size: 32px;">Create Donar</h1>
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

                  	{!! Form::open([ 'url' => 'donars', 'method' => 'post', 'files' => true ]) !!}

                  	<div class="row">

                      <div class="form-group col-md-6 col-sm-6 col-xs-12" style="margin-top: 1%">
                      {!! Form::label("identity_no", "Identification No:", ["class" => "control-label"]) !!}
                      {!! Form::text("identity_no", null, ["class" => "form-control","id"=>"txt_box"]) !!}
                      </div>

                      <div class="form-group col-md-6 col-sm-6 col-xs-12" style="margin-top: 1%">
                      {!! Form::label("fname", "First Name:", ["class" => "control-label"]) !!}
                      {!! Form::text("fname", null, ["class" => "form-control","id"=>"txt_box"]) !!}
                      </div>

                      <div class="form-group col-md-6 col-sm-6 col-xs-12" style="margin-top: 1%">
                      {!! Form::label("lname", "Last Name:", ["class" => "control-label"]) !!}
      				        {!! Form::text("lname", null, ["class" => "form-control"]) !!}
                      </div>

                      <div class="form-group col-md-6 col-sm-6 col-xs-12" style="margin-top: 1%">
                      {!! Form::label("company", "Company Name:", ["class" => "control-label"]) !!}
                      {!! Form::text("company", null, ["class" => "form-control"]) !!}
                      </div>

                      <div class="form-group col-md-6 col-sm-6 col-xs-12" style="margin-top: 1%">
                      {!! Form::label("phone", "Phone:", ["class" => "control-label"]) !!}
                      {!! Form::text("phone", null, ["class" => "form-control"]) !!}
                      </div>

                      <div class="form-group col-md-6 col-sm-6 col-xs-12" style="margin-top: 1%">
                      {!! Form::label("email", "Email:", ["class" => "control-label"]) !!}
                      {!! Form::text("email", null, ["class" => "form-control"]) !!}
                      </div>

                      <div class="form-group col-md-6 col-sm-6 col-xs-12" style="margin-top: 1%">
                      {!! Form::label("country", "Country:", ["class" => "control-label"]) !!}
                      {!! Form::text("country", null, ["class" => "form-control"]) !!}
                      </div>

                      <div class="form-group col-md-6 col-sm-6 col-xs-12" style="margin-top: 1%">
                      {!! Form::label("city", "City:", ["class" => "control-label"]) !!}
                      {!! Form::text("city", null, ["class" => "form-control"]) !!}
                      </div>

                      <div class="form-group col-md-6 col-sm-6 col-xs-12" style="margin-top: 1%">
                      {!! Form::label("image", "Image:", ["class" => "control-label"]) !!}
                      <input type="file" name="image" class="form-control">
                      </div>

                      <div class="form-group col-md-12 col-sm-12 col-xs-12" style="margin-top: 1%">
                      {!! Form::label("address", "Address:", ["class" => "control-label"]) !!}
      				        {!! Form::textarea("address", null, ['class' => 'form-control','rows' => 10]) !!}
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
@endsection