<div class="row">
<div class="col-md-12 col-xs-12">

<div class="x_title">
       <h1>Manage Currencies</h1>

<ul class="nav navbar-right panel_toolbox">
	<a href="{{ url('currencys/create') }}" class="btn btn-danger" style="float:right">
	<i class="fa fa-plus"></i> Add Currency</a>
</ul>

<div class="clearfix"></div>
</div>

<div class="x_content">

{!! Form::model($formModel, [
    'route' => 'currencys.index',
    'method' => 'get'
]) !!}
    
    <div class="col-md-4 col-sm-6 col-xs-12 form-group">
		{!! Form::label("currency_name", "Currency Name:", ["class" => "control-label"]) !!}
		{!! Form::text("currency_name", null, ["class" => "form-control"]) !!}
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
