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
             <h1 style="color: #000;font-size: 32px;">Create Expense</h1>
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
          
					{!! Form::open([ 'url' => 'expenses', 'method' => 'post', 'files' => true ]) !!}

              <div class="row">

                <div class="form-group col-md-6 col-sm-6 col-xs-12" style="margin-top: 1%">
                {!! Form::label("type", "Donation type:", ["class" => "control-label"]) !!}
                {!! Form::select("type", $type, null, ["class" => "form-control", "placeholder" => "Please Select"]) !!}
                </div>

                <div class="form-group col-md-6 col-sm-6 col-xs-12" style="margin-top: 1%">
                {!! Form::label("amount", "Amount:", ["class" => "control-label"]) !!}
				        {!! Form::text("amount", null, ["class" => "form-control"]) !!}
                </div>

                <div class="form-group col-md-6 col-sm-6 col-xs-12" style="margin-top: 1%">
                {!! Form::label("currency", "Currency:", ["class" => "control-label"]) !!}
                {!! Form::select("currency", $currency, null, ["class" => "form-control", "placeholder" => "Please Select"]) !!}
                </div>

                <div class="form-group col-md-6 col-sm-6 col-xs-12" style="margin-top: 1%">
                {!! Form::label("location", "Location:", ["class" => "control-label"]) !!}
                {!! Form::text("location", null, ["class" => "form-control"]) !!}
                </div>

                <div class="form-group col-md-6 col-sm-6 col-xs-12" style="margin-top: 1%">
                {!! Form::label("date_added", "Expense Date:", ["class" => "control-label"]) !!}
                {!! Form::text("date_added", date('Y-m-d'), ['class' => 'form-control datepicker1']) !!}
                </div>

                <div class="form-group col-md-12 col-sm-12 col-xs-12" style="margin-top: 1%">
                {!! Form::label("comment", "Comment:", ["class" => "control-label"]) !!}
                {!! Form::textarea("comment", null, ['class' => 'form-control','rows' => 10]) !!}
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
 
$(document).on('focusin', '.datepicker1', function(){
     $(this).datepicker({
         format: 'yyyy-mm-dd',
         changeMonth: true,
         changeYear: true,
         yearRange: '1990:<?php echo date('Y'); ?>'
       });
   });
 
</script>
@endsection

