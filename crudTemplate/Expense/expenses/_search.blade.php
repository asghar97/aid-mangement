{!! Form::model($formModel, [
    'route' => 'expenses.index',
    'method' => 'get'
]) !!}



<div class="form-group">
{!! Form::label("id", "Id:", ["class" => "control-label"]) !!}
{!! Form::text("id", null, ["class" => "form-control"]) !!}</div>
<div class="form-group">
{!! Form::label("donar_id", "Donar_id:", ["class" => "control-label"]) !!}
{!! Form::text("donar_id", null, ["class" => "form-control"]) !!}</div>
<div class="form-group">
{!! Form::label("amount", "Amount:", ["class" => "control-label"]) !!}
{!! Form::text("amount", null, ["class" => "form-control"]) !!}</div>
<div class="form-group">
{!! Form::label("currency", "Currency:", ["class" => "control-label"]) !!}
{!! Form::text("currency", null, ["class" => "form-control"]) !!}</div>
<div class="form-group">
{!! Form::label("type", "Type:", ["class" => "control-label"]) !!}
{!! Form::text("type", null, ["class" => "form-control"]) !!}</div>
<div class="form-group">
{!! Form::label("comment", "Comment:", ["class" => "control-label"]) !!}
{!! Form::text("comment", null, ["class" => "form-control"]) !!}</div>
<div class="form-group">
{!! Form::label("location", "Location:", ["class" => "control-label"]) !!}
{!! Form::text("location", null, ["class" => "form-control"]) !!}</div>
<div class="form-group">
{!! Form::label("date_added", "Date_added:", ["class" => "control-label"]) !!}
{!! Form::text("date_added", null, ["class" => "form-control"]) !!}</div>
<div class="form-group">
{!! Form::label("status", "Status:", ["class" => "control-label"]) !!}
{!! Form::text("status", null, ["class" => "form-control"]) !!}</div>
<div class="form-group">
{!! Form::label("created_at", "Created_at:", ["class" => "control-label"]) !!}
{!! Form::text("created_at", null, ["class" => "form-control"]) !!}</div>
<div class="form-group">
{!! Form::label("updated_at", "Updated_at:", ["class" => "control-label"]) !!}
{!! Form::text("updated_at", null, ["class" => "form-control"]) !!}</div>
<div class="form-group">
{!! Form::label("created_by", "Created_by:", ["class" => "control-label"]) !!}
{!! Form::text("created_by", null, ["class" => "form-control"]) !!}</div>
<div class='form-group'>{!! Form::submit('Search', ['class' => 'btn btn-primary','name'=>'submit']) !!}</div>


{!! Form::close() !!}