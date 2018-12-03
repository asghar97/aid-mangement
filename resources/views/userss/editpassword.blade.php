@extends('home')
@section('content')

<div class="container">
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Change Password</h2>
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

                  <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12">

                  <div class="x_content">

                  <form method="POST" action="http://localhost/projects/aid_management/updatepassword/<?php echo $users->id; ?>" accept-charset="UTF-8" enctype="multipart/form-data">

                  <input name="_method" type="hidden" value="PATCH">
                  
                  {!! Form::token() !!}


                        <div class="form-group">
                        {{Form::label('oldpassword', 'Current Password')}}
                        {{Form::password('oldpassword',['class' => 'form-control'])}}
                        @if ($errors->has('oldpassword'))
                        <span class="help-block">
                        <strong>{{ $errors->first('oldpassword') }}</strong>
                        </span>
                        @endif
                        </div>

                        <div class="form-group">
                        {{Form::label('password', 'New Password')}}
                        {{Form::password('password',['class' => 'form-control'])}}
                        @if ($errors->has('password'))
                        <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                        </div>
                    
                        <div class="form-group">
                        {{Form::label('password_confirmation', 'Confirm New Password')}}
                        {{Form::password('password_confirmation',['class' => 'form-control'])}}
                        @if ($errors->has('password_confirmation'))
                        <span class="help-block">
                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                        </span>
                        @endif
                        </div>

                    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
                    
                    </form>
                                  
                  </div>

            </div>
        </div>


            </div>
        </div>
    </div>
</div>

@endsection