<div class="row">
<div class="col-md-12 col-xs-12">

<div class="x_title">
       <h1>Manage Donations</h1>

<ul class="nav navbar-right panel_toolbox">
	<a href="{{ url('donations/create') }}" class="btn btn-danger" style="float:right">
	<i class="fa fa-plus"></i> Add Donation</a>
</ul>

<div class="clearfix"></div>
</div>

<div class="x_content">

{!! Form::model($formModel, [
    'route' => 'donations.index',
    'method' => 'get'
]) !!}

<?php $currency = App\Currency::pluck('currency_name','id'); ?>
    
    <div class="col-md-4 col-sm-6 col-xs-12 form-group">
		{!! Form::label("donar_id", "Donar:", ["class" => "control-label"]) !!}
		{!! Form::text("donar_id", null, ["class" => "form-control"]) !!}
	</div>

	<div class="col-md-4 col-sm-6 col-xs-12 form-group">
		{!! Form::label("amount", "Amount:", ["class" => "control-label"]) !!}
		{!! Form::text("amount", null, ["class" => "form-control"]) !!}
	</div>

	<div class="col-md-4 col-sm-6 col-xs-12 form-group">
		{!! Form::label("currency", "Currency:", ["class" => "control-label"]) !!}
		{!! Form::select("currency", $currency, null, ["class" => "form-control", "placeholder" => "Please Select"]) !!}
	</div>

	<div class="form-group">
        <div class="col-md-10 col-sm-9 col-xs-12">
            {!! Form::submit('Search', ['class' => 'btn btn-primary','name'=>'submit']) !!}
        </div>
    </div>

{!! Form::close() !!}

</div>


</div>
</div>

