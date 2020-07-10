@extends('admin.master')
@section('title','Agregar Productos')
@section('breadcrumb')
<li class="breadcrumb-item">
    <a href="{{ route('product.index') }}"><i class="fas fa-boxes"></i>Productos</a>
</li>
<li class="breadcrumb-item">
    <a href="{{ route('product.create') }}"><i class="fas fa-plus"></i>Agregar Productos</a>
</li>
@endsection
@section('contenido')
<div class="container-fluid">
    <div class="panel shadow">
        <div class="header">
            <h2 class="title"><i class="fas fa-plus"></i>Agregar Productos</h2>
        </div>
        <div class="body">
            {!! Form::open(['route'=>'product.store','files'=>true]) !!}
            <div class="row">
                <div class="col-md-6">
                    <label for="name">Nombre</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-keyboard"></i></div>
                        </div>
                        {!! Form::text('name', null, ['class'=>'form-control']) !!}
                    </div>
                    @error('name')
                       <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="col-md-3">
                    <label for="name">Categoria</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-shopping-bag"></i></div>
                        </div>
                        {!! Form::select('category_id', $categories , null , ['class'=>'custom-select']) !!}
                    </div>
                    @error('category_id')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="col-md-3">
                    <label for="image">Imagen Destacada</label>
                    <div class="custom-file">
                        {!! Form::file('image', ['class'=>'custom-file-input', 'id'=>'customFile', 'accept'=>'image/*']) !!}
                        <label class="custom-file-label" for="customFile">Seleccione una imagen</label>
                    </div>
                    @error('image')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="row mtop16">
                <div class="col-md-3">
                    <label for="price">Precio</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-tags"></i></div>
                        </div>
                    {!! Form::number('price', null, ['class'=>'form-control', 'min'=>'0.00', 'step'=>'any']) !!}
                    </div>
                    @error('price')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="col-md-3">
                    <label for="in_discount">En descuento?</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-percentage"></i></div>
                        </div>
                        {!! Form::select('in_discount', ['0'=>'No','1'=>'Si'],0,['class'=>'custom-select']) !!}
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="discount">Descuento</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-money-check-alt"></i></div>
                        </div>
                        {!! Form::number('discount', 0.00, ['class'=>'form-control', 'min'=>'0.00', 'step'=>'any']) !!}
                    </div>
                </div>

            </div>
            <div class="row mtop16">
                <div class="col-md-12">
                      <label for="description">Descripcion</label>
                     {!! Form::textarea('description', null, ['class'=>'form-control ckeditor']) !!}
                     @error('description')
                         <small class="form-text text-danger">{{ $message }}</small>
                     @enderror
                </div>
            </div>

            <div class="row mtop16">
                <div class="col-md-12">
                    {!! Form::submit('Guardar', ['class'=>'btn btn-info']) !!}
                </div>
            </div>

            {!! Form::close() !!}
        </div>

    </div>
</div>
@endsection
