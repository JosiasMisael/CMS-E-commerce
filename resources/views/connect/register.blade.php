@extends('connect.master')
@section('title','Regsitrarse')
@section('content')
<div class="box-re box-register shadow">
    <div class="card-header register-img">
        <a href="{{ url('/') }}">
            <img src="{{ url('/static/img/logo.png')}}" >
        </a>
    </div>
    <div class="card-body">
        <label class="titulo" for="">Ingrese sus datos personales</label>
        {!! Form::open(['url'=>'/register']) !!}
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="name">Nombre</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="far fa-user"></i></div>
                    </div>
                    {!! Form::text('name', null, ['class'=>'form-control']) !!}
                </div>
                @error('name')
                <small class="form-text text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label for="last_name" class="">Apellido</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-user-tag"></i></div>
                    </div>
                    {!! Form::text('last_name', null, ['class'=>'form-control']) !!}
                </div>
                @error('last_name')
                <small class="form-text text-danger">{{ $message }}</small>
                @enderror
            </div>
        </div>

        <div class="form-row">
            <div class="col-md-12 mb-3">
                <label for="email" class="mtop16">Correo Electronico</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="far fa-envelope-open"></i></div>
                    </div>
                    {!! Form::email('email', null, ['class'=>'form-control']) !!}
                </div>
                @error('email')
                 <small class="form-text text-danger">{{ $message }}</small>
                @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="password" class="mtop16">Password</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-lock"></i></div>
                    </div>
                    {!! Form::password('password', ['class'=>'form-control']) !!}
                </div>
                @error('password')
                 <small class="form-text text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label for="password_confirmation" class="mtop16">Confirmar Password</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-lock"></i></div>
                    </div>
                    {!! Form::password('password_confirmation', ['class'=>'form-control']) !!}
                </div>
                @if (  $errors->first('password') =='El campo confirmación de contraseña no coincide.')
                <small class="form-text text-danger">El campo confirmación de contraseña no coincide.</small>

                @endif

            </div>
        </div>
        {!! Form::submit('Registrarse', ['class'=>'btn btn-success mtop16 btn-block']) !!}
        {!! Form::close() !!}
    </div>

    <div class="card-footer footer">
        <a href="{{ route('login.view') }}">Ya tengo una cuenta, Ingresar</a>
    </div>
    </div>
@endsection
