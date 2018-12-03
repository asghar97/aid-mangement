 @include('flash_msgs')

{!! Form::model($model, [
    'method' => 'PATCH',
    'route' => ['donars.update', $model->id]
]) !!}

<div class="form-group">
{!! Form::label("id", "Id:", ["class" => "control-label"]) !!}
{!! Form::text("id", null, ["class" => "form-control"]) !!}</div>
<div class="form-group">
{!! Form::label("fname", "Fname:", ["class" => "control-label"]) !!}
{!! Form::text("fname", null, ["class" => "form-control"]) !!}</div>
<div class="form-group">
{!! Form::label("lname", "Lname:", ["class" => "control-label"]) !!}
{!! Form::text("lname", null, ["class" => "form-control"]) !!}</div>
<div class="form-group">
{!! Form::label("address", "Address:", ["class" => "control-label"]) !!}
{!! Form::text("address", null, ["class" => "form-control"]) !!}</div>
<div class="form-group">
{!! Form::label("city", "City:", ["class" => "control-label"]) !!}
{!! Form::text("city", null, ["class" => "form-control"]) !!}</div>
<div class="form-group">
{!! Form::label("country", "Country:", ["class" => "control-label"]) !!}
{!! Form::text("country", null, ["class" => "form-control"]) !!}</div>
<div class="form-group">
{!! Form::label("phone", "Phone:", ["class" => "control-label"]) !!}
{!! Form::text("phone", null, ["class" => "form-control"]) !!}</div>
<div class="form-group">
{!! Form::label("email", "Email:", ["class" => "control-label"]) !!}
{!! Form::text("email", null, ["class" => "form-control"]) !!}</div>
<div class="form-group">
{!! Form::label("company", "Company:", ["class" => "control-label"]) !!}
{!! Form::text("company", null, ["class" => "form-control"]) !!}</div>
<div class="form-group">
{!! Form::label("image", "Image:", ["class" => "control-label"]) !!}
{!! Form::text("image", null, ["class" => "form-control"]) !!}</div>
<div class="form-group">
{!! Form::label("created_at", "Created_at:", ["class" => "control-label"]) !!}
{!! Form::text("created_at", null, ["class" => "form-control"]) !!}</div>
<div class="form-group">
{!! Form::label("updated_at", "Updated_at:", ["class" => "control-label"]) !!}
{!! Form::text("updated_at", null, ["class" => "form-control"]) !!}</div>
<div class="form-group">
{!! Form::label("status", "Status:", ["class" => "control-label"]) !!}
{!! Form::text("status", null, ["class" => "form-control"]) !!}</div>
<div class="form-group">
{!! Form::label("created_by", "Created_by:", ["class" => "control-label"]) !!}
{!! Form::text("created_by", null, ["class" => "form-control"]) !!}</div>
<div class='form-group'>{!! Form::submit('Update Donar', ['class' => 'btn btn-primary']) !!}</div>



{!! Form::close() !!}