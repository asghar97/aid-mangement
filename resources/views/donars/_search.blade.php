<div class="row">
<div class="col-md-12 col-xs-12">

<div class="x_title">
       <h1>Manage Donars</h1>

<ul class="nav navbar-right panel_toolbox">
	<a href="{{ url('donars/create') }}" class="btn btn-danger" style="float:right">
	<i class="fa fa-plus"></i> Add Donar</a>
</ul>

<div class="clearfix"></div>
</div>

<div class="x_content">

{!! Form::model($formModel, [
    'route' => 'donars.index',
    'method' => 'get'
]) !!}


<div class="col-md-4 col-sm-6 col-xs-12 form-group">
		{!! Form::label("fname", "First Name:", ["class" => "control-label"]) !!}
		{!! Form::text("fname", null, ["class" => "form-control"]) !!}
	</div>

	<div class="col-md-4 col-sm-6 col-xs-12 form-group">
		{!! Form::label("lname", "Last Name:", ["class" => "control-label"]) !!}
		{!! Form::text("lname", null, ["class" => "form-control"]) !!}
	</div>

	<div class="col-md-4 col-sm-6 col-xs-12 form-group">
		{!! Form::label("country", "Country:", ["class" => "control-label"]) !!}
		{!! Form::text("country", null, ["class" => "form-control"]) !!}
	</div>

	<div class="col-md-4 col-sm-6 col-xs-12 form-group">
		{!! Form::label("email", "Email:", ["class" => "control-label"]) !!}
		{!! Form::text("email", null, ["class" => "form-control"]) !!}
	</div>

	<div class="col-md-4 col-sm-6 col-xs-12 form-group">
		{!! Form::label("company", "Company:", ["class" => "control-label"]) !!}
		{!! Form::text("company", null, ["class" => "form-control"]) !!}
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

<script>
    $('.donar_name').autocomplete({
        source:"{{ url('AutoCompleteDonarName') }}", 
        minLength:1,
        select: function(event,ui){
          $("#donar_id").val( ui.item.id );
        },
    });
</script>

