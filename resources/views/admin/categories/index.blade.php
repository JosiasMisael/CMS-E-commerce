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
                    <h2 class="title"><i class="fas fa-boxes"></i>Categorias</h2>
                </div>
                <div class="body">
                    {!! Form::open(['route'=>'category.store']) !!}
                    <label for="name">Nombre:</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-keyboard"></i></div>
                        </div>
                        {!! Form::text('name', null, ['class'=>'form-control']) !!}
                    </div>
                    @error('name')
                    <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                    <label for="module" class="mtop16">Modulo:</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-sort-amount-up"></i></div>
                        </div>
                        {!! Form::select('module', getModulesArray(), 0 , ['class'=>'custom-select']) !!}
                    </div>
                    @error('module')
                    <small class="form-text text-alert">{{ $message }}</small>
                    @enderror
                    <label for="icon" class="mtop16">Icono:</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-icons"></i></div>
                        </div>
                        {!! Form::text('icon', null, ['class'=>'form-control']) !!}
                    </div>
                    @error('icon')
                    <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                    {!! Form::submit('Guardar', ['class'=>'btn btn-info mtop16 btn-block']) !!}
                    {!! Form::close() !!}
                </div>

            </div>
        </div>
        <div class="col-md-9">
            <div class="panel shadow">
                <div class="header">
                    <h2 class="title"><i class="far fa-folder-open"></i>Categorias</h2>
                </div>
                <div class="body">
                    <nav class="nav nav-tabs">
                        @forelse (getModulesArray() as $m =>$k)
                        <a class="nav-link " href="{{ route('category.index', $m) }}"><i class="far fa-list-alt"></i>{{ $k }}</a>
                        @empty
                        <a class="nav-link" href="#">No hay Modules</a>
                        @endforelse
                    </nav>
                    <table class="table ">
                        <thead>
                            <th width="32px">Icono</th>
                            <th>Nombre</th>
                            <th width="120">Acciones</th>
                        </thead>
                        <tbody>
                            @forelse ($categories as $category)
                            <tr>
                                <td>{!! htmlspecialchars_decode($category->icon) !!}</td>
                                <td>{{ $category->name }}</td>

                            <td>
                                <div class="opts">
                                <a href="{{ route('category.edit', $category)}}" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fas fa-edit"></i></a>
                                <a href="{{ route('category.destroy', $category)}}" data-toggle="tooltip" data-placement="top" title="Eliminar"><i class="fas fa-trash"></i></a>
                                 </div>
                              </td>
                            </tr>
                            @empty

                            @endforelse
                        </tbody>
                    </table>

                </div>

            </div>
        </div>
    </div>
</div>
@endsection
