@extends('layouts.master')

@section('content')
<h2>Forgot password </h2>

@if (Session::has('message'))
    <div class="alert alert-success">{{ Session::get('message') }}</div>
@endif

@if (Session::has('error_message'))
    <div class="alert alert-danger">{{ Session::get('error_message') }}</div>
@endif
  @if(count($errors))
    <div class="alert alert-danger">
      <ul>
        @foreach($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

    {!! Form::open(array('route' => 'handleForgot')) !!}
    <div class="form-group">
        {!! Form::label('email') !!}
        {!! Form::text('email', null, array('class' => 'form-control')) !!}
    </div>

    {!! Form::token() !!}
    {!! Form::submit('Login', array('class' => 'btn btn-default')) !!}
  {!! Form::close() !!}
@endsection
