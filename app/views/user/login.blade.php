@extends('layouts.app-small')

@section('content')

<div class="row">
  <div class="large-12 columns">

    <section id="page-content">

      <h4 class="page-title">Sign In</h4>

      {{ Form::open(array('url' => 'user/login')) }}

      @if($errors->has('errors'))
      <div class="alert alert-danger">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        {{ $errors->first('errors', ':message') }}
      </div>
      @endif

      {{ Form::label('email', 'Email Address') }}
        {{ Form::text('email', '', array('class' => 'form-control', 'placeholder' => 'Email Address')) }}

      {{ Form::label('password', 'Password') }}
        {{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'Password')) }}

      {{ Form::submit('Start my session', array('class' => 'button success')) }}

      {{ Form::close() }}

      <p>
        {{ HTML::link('user/register', '/ I have no account') }}
      </p>
    </section>

  </div>
</div>

@stop
