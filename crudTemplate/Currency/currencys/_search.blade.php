{!! Form::model($formModel, [
    'route' => 'currencys.index',
    'method' => 'get'
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
<div class='form-group'>{!! Form::submit('Search', ['class' => 'btn btn-primary','name'=>'submit']) !!}</div>


{!! Form::close() !!}