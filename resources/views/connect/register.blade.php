@extends('connect.master')
@section('title','Regsitrarse')
@section('content')
<div class="box box-register shadow">
    <div class="card-header">
        <a href="{{ url('/') }}">
            <img src="{{ url('/static/img/logo.png')}}">
        </a>
    </div>
    <div class="card-body">
        {!! Form::open(['url'=>'/register']) !!}
        <label for="name">Nombre</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text"><i class="far fa-user"></i></div>
            </div>
            {!! Form::text('name', null, ['class'=>'form-control']) !!}
        </div>
        <label for="last name" class="mtop16">Apellido</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text"><i class="fas fa-user-tag"></i></div>
            </div>
            {!! Form::text('last_name', null, ['class'=>'form-control']) !!}
        </div>
        <label for="email" class="mtop16">Correo Electronico</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text"><i class="far fa-envelope-open"></i></div>
            </div>
            {!! Form::email('name', null, ['class'=>'form-control']) !!}
        </div>
        <label for="password" class="mtop16">Password</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text"><i class="fas fa-lock"></i></div>
            </div>
            {!! Form::password('password', ['class'=>'form-control']) !!}
        </div>
        <label for="confirmar password" class="mtop16">Confirmar Password</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text"><i class="fas fa-lock"></i></div>
            </div>
            {!! Form::password('password_confirm', ['class'=>'form-control']) !!}
        </div>
        {!! Form::submit('Registrarse', ['class'=>'btn btn-success mtop16 btn-block']) !!}
        {!! Form::close() !!}
    </div>
            <div class="card-footer footer">
                <a href="{{ route('login') }}">Ya tengo una cuenta, Ingresar</a>
            </div>
</div>
@endsection
