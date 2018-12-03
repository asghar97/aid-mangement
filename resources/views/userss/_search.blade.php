<div class="row">
<div class="col-md-12 col-xs-12">

<div class="x_title">
       <h1>Manage Users</h1>

<ul class="nav navbar-right panel_toolbox">
	<a href="{{ url('userss/create') }}" class="btn btn-danger" style="float:right">
	<i class="fa fa-plus"></i> Add Users</a>
</ul>

<div class="clearfix"></div>
</div>

<div class="x_content">

{!! Form::model($formModel, [
    'route' => 'userss.index',
    'method' => 'get'
]) !!}
    
    <div class="col-md-4 col-sm-6 col-xs-12 form-group">
		{!! Form::label("username", "Username:", ["class" => "control-label"]) !!}
		{!! Form::text("username", null, ["class" => "form-control"]) !!}
	</div>

	<div class="col-md-4 col-sm-6 col-xs-12 form-group">
		{!! Form::label("name", "Name:", ["class" => "control-label"]) !!}
		{!! Form::text("name", null, ["class" => "form-control"]) !!}
	</div>

	<div class="col-md-4 col-sm-6 col-xs-12 form-group">
		{!! Form::label("user_type", "User type:", ["class" => "control-label"]) !!}
		{!! Form::text("user_type", null, ["class" => "form-control"]) !!}
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