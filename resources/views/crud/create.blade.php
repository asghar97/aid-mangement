@extends('home')
@section('content')

@include('flash_msgs')
 
{!! Form::open([
    'route' => 'crud.store'
]) !!}

<div class="row">
<div class="form-group col-md-12">

<h1 style="font-size: 1.6em;color: #666">Welcome to Laravel Crud Generator!</h1>

</div>
</div>

<div class="row">
<div class="form-group col-md-6">
    {!! Form::label('description', 'Table Name:', ['class' => 'control-label']) !!}
    {!! Form::text('tbname', null, ['class' => 'form-control','required' => 'required']) !!}
</div>
</div>

<div class="row">
<div class="form-group col-md-6">
    {!! Form::label('description', 'Model Name:', ['class' => 'control-label']) !!}
    {!! Form::text('modelname', null, ['class' => 'form-control','required' => 'required']) !!}
</div>
</div>

<div class="row">
<div class="form-group col-md-6">
{!! Form::submit('Create', ['class' => 'btn btn-primary']) !!}
</div>
</div>

{!! Form::close() !!}
@endsection