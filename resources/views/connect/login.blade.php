@extends('connect.master')
@section('title','Login')
@section('content')
<div class="box box-login shadow">
    @include('partials.message')
    <div class="card-header login-img">
        <a href="{{ url('/') }}">
            <img src="{{ url('/static/img/logo.png')}}">
        </a>
    </div>
    <div class="card-body">
        {!! Form::open(['url'=>'/login']) !!}
        <label for="email">Correo Electronico</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text"><i class="far fa-envelope-open"></i></div>
            </div>
            {!! Form::email('email', null, ['class'=>'form-control']) !!}
        </div>
        @error('email')
        <span class="form-text text-danger">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        <label for="email" class="mtop16">Password</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text"><i class="fas fa-lock"></i></div>
            </div>
            {!! Form::password('password', ['class'=>'form-control']) !!}
        </div>
        @error('password')
        <span class="form-text text-danger">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        {!! Form::submit('Ingresar', ['class'=>'btn btn-success mtop16 btn-block']) !!}
        {!! Form::close() !!}
    </div>
    <div class="card-footer footer">
        <a href="{{ route('registro.view') }}">¿No tienes una cuenta?,Registrate.</a>
        <a href="{{ url('/recover') }}">Recuperar Contraseña</a>
    </div>
</div>
@endsection
