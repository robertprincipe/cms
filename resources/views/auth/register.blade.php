@extends('layouts.auth')

@section('title', 'Registro')

@section('content')
  <div class="box box-register shadow">
    <div class="header-box">
      <a href="{{ url('/') }}">
        <img src="{{ asset('img/firefox.png') }}" alt="eCommerce">
      </a>
    </div>
    <div class="inside">
      {!! Form::open(['url' => '/register']) !!}
        <label for="name">Nombre</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text" id="name"><i class="fas fa-user"></i></span>
          </div>
          {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>
        <label for="lastname" class="mt-16">Apellido</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text" id="lastname"><i class="fas fa-user"></i></span>
          </div>
          {!! Form::text('lastname', null, ['class' => 'form-control']) !!}
        </div>
        <label for="email" class="mt-16">Correo electrónico</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text" id="email"><i class="fas fa-envelope-open"></i></span>
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
        <label for="confirm-password" class="mt-16">Confirmar Contraseña</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text" id="confirm-password"><i class="fas fa-lock"></i></span>
          </div>
          {!! Form::password('confirm-password', ['class' => 'form-control']) !!}
        </div>
        {!! Form::submit('Registrarse', ['class' => 'btn btn-success btn-100 mt-16']) !!}
      {!! Form::close() !!}
      <div class="footer mt-16">
        <a href="{{ url('/login') }}">¿Ya tienes una cuenta?</a>
      </div>
    </div>
  </div>
@stop
