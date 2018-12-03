@include('flash_msgs')
 
{!! Form::open([
    'route' => 'donations.store'
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
<div class='form-group'>{!! Form::submit('Create New Donation', ['class' => 'btn btn-primary']) !!}</div>

{!! Form::close() !!}