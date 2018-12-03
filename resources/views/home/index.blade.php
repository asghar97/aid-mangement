@extends('layout')
@section('content')

@if(strtolower(Auth::user()->user_type) == 'admin')

    @include('home.admin_index')

@endif

@if(strtolower(Auth::user()->user_type) == 'data_entry')

    @include('home.data_index')

@endif

@endsection
