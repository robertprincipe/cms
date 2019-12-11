@extends('layouts.auth')

@section('title', 'Iniciar sesión')

@section('content')
  <div class="box box-login shadow">
    <div class="header-box">
      <a href="{{ url('/') }}">
        <img src="{{ asset('img/firefox.png') }}" alt="eCommerce">
      </a>
    </div>
    <div class="inside">
      {!! Form::open(['url' => '/login']) !!}
        <label for="email">Correo electrónico</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text" id="email"><i class="far fa-envelope-open"></i></span>
          </div>
          {!! Form::email('email', null, ['class' => 'form-control']) !!}
        </div>
        <label for="password" class="mt-16">Contraseña</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text" id="password"><i class="fas fa-lock"></i></span>
          </div>
          {!! Form::password('password', ['class' => 'form-control']) !!}
        </div>
        {!! Form::submit('Ingresar', ['class' => 'btn btn-success btn-100 mt-16']) !!}
      {!! Form::close() !!}
      <div class="mt-16 footer">
        <a href="{{ url('/register') }}">¿No tienes una cuenta?, Registrate</a>
        <a href="{{ url('/recover') }}">¿Olvidaste tu contraseña?</a>
      </div>
    </div>
  </div>
@stop
