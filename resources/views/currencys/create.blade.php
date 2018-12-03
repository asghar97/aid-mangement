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
             <h1 style="color: #000;font-size: 32px;">Create Currency</h1>
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
          
					{!! Form::open([ 'url' => 'currencys', 'method' => 'post', 'files' => true ]) !!}

              <div class="row">

                <div class="form-group col-md-6 col-sm-6 col-xs-12" style="margin-top: 1%">
                {!! Form::label("currency_name", "Currency Name:", ["class" => "control-label"]) !!}
                {!! Form::text("currency_name", null, ["class" => "form-control","id"=>"txt_box"]) !!}
                </div>

                <div class="form-group col-md-6 col-sm-6 col-xs-12" style="margin-top: 1%">
                {!! Form::label("currency_symbols", "Currency Symbol:", ["class" => "control-label"]) !!}
			         	{!! Form::text("currency_symbols", null, ["class" => "form-control"]) !!}
                </div> 

                <div class="form-group col-md-6 col-sm-6 col-xs-12" style="margin-top: 1%">
                {!! Form::label("currency_rate", "Currency Rate:", ["class" => "control-label"]) !!}
                {!! Form::text("currency_rate", null, ["class" => "form-control"]) !!}
                </div> 

                <div class="form-group col-md-6 col-sm-6 col-xs-12" style="margin-top: 3%">
              {{ Form::select('status', [
                            ''=>'Select Status',
                           '0' => 'Status Not Avialable',
                           '1' => 'Default set ',
                         
                            ]
                          , null, array('class' => 'form-control') ) }}
                </div> 


                </div>
          
                <div class="row">
                <div class="form-group col-md-6 col-sm-6 col-xs-12" style="margin-top: 1%">
                {!! Form::submit('Create', ['class' => 'btn btn-primary']) !!}
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
