@extends('admin.master')
@section('title', 'Categorias')
@section('breadcrumb')
<li class="breadcrumb-item">
    <a href="{{ route('category.index', 0) }}"><i class="fas fa-folder-open"></i>Categorias</a>
</li>
@endsection
@section('contenido')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            <div class="panel shadow">
                <div class="header">
                    <h2 class="title"><i class="fas fa-edit"></i>Editar Categoria</h2>
                </div>
                <div class="body">
                    {!! Form::open(['route'=>['category.update', $category],'method'=>'PUT']) !!}
                    <label for="name">Nombre:</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-keyboard"></i></div>
                        </div>
                        {!! Form::text('name', $category->name, ['class'=>'form-control']) !!}
                    </div>
                    @error('name')
                    <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                    <label for="module" class="mtop16">Modulo:</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-sort-amount-up"></i></div>
                        </div>
                        {!! Form::select('module', getModulesArray(), $category->module , ['class'=>'custom-select']) !!}
                    </div>
                    @error('module')
                    <small class="form-text text-alert">{{ $message }}</small>
                    @enderror
                    <label for="icon" class="mtop16">Icono:</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-icons"></i></div>
                        </div>
                        {!! Form::text('icon', $category->icon, ['class'=>'form-control']) !!}
                    </div>
                    @error('icon')
                    <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                    {!! Form::submit('Actualizar', ['class'=>'btn btn-info mtop16 btn-block']) !!}
                    {!! Form::close() !!}
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
