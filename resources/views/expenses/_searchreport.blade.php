<div class="row">
<div class="col-md-12 col-xs-12">

<div class="x_title">
       <h1>Manage Expenses Report</h1>

<ul class="nav navbar-right panel_toolbox">
	
</ul>

<div class="clearfix"></div>
</div>

<div class="x_content">

{!! Form::model($formModel, [
    'route' => 'expenses.index',
    'method' => 'get'
]) !!}

<?php $currency = App\Expense::pluck('created_at'); ?>

	<div class="col-md-4 col-sm-6 col-xs-12 form-group">
		{!! Form::label("amount", "From:", ["class" => "control-label"]) !!}
		{!! Form::date("from", null, ["class" => "form-control"]) !!}
	</div>

    <div class="col-md-4 col-sm-6 col-xs-12 form-group">
        {!! Form::label("currency", "To:", ["class" => "control-label"]) !!}
        {!! Form::date("to", null, ["class" => "form-control"]) !!}
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

