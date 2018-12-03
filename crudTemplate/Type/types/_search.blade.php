{!! Form::model($formModel, [
    'route' => 'types.index',
    'method' => 'get'
]) !!}



<div class="form-group">
{!! Form::label("id", "Id:", ["class" => "control-label"]) !!}
{!! Form::text("id", null, ["class" => "form-control"]) !!}</div>
<div class="form-group">
{!! Form::label("name", "Name:", ["class" => "control-label"]) !!}
{!! Form::text("name", null, ["class" => "form-control"]) !!}</div>
<div class="form-group">
{!! Form::label("status", "Status:", ["class" => "control-label"]) !!}
{!! Form::text("status", null, ["class" => "form-control"]) !!}</div>
<div class="form-group">
{!! Form::label("date_added", "Date_added:", ["class" => "control-label"]) !!}
{!! Form::text("date_added", null, ["class" => "form-control"]) !!}</div>
<div class='form-group'>{!! Form::submit('Search', ['class' => 'btn btn-primary','name'=>'submit']) !!}</div>


{!! Form::close() !!}