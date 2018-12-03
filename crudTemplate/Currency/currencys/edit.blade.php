 @include('flash_msgs')

{!! Form::model($model, [
    'method' => 'PATCH',
    'route' => ['currencys.update', $model->id]
]) !!}

<div class="form-group">
{!! Form::label("id", "Id:", ["class" => "control-label"]) !!}
{!! Form::text("id", null, ["class" => "form-control"]) !!}</div>
<div class="form-group">
{!! Form::label("currency_name", "Currency_name:", ["class" => "control-label"]) !!}
{!! Form::text("currency_name", null, ["class" => "form-control"]) !!}</div>
<div class="form-group">
{!! Form::label("currency_symbols", "Currency_symbols:", ["class" => "control-label"]) !!}
{!! Form::text("currency_symbols", null, ["class" => "form-control"]) !!}</div>
<div class='form-group'>{!! Form::submit('Update Currency', ['class' => 'btn btn-primary']) !!}</div>



{!! Form::close() !!}