@extends('admin.master')
@section('title','Products')
@section('breadcrumb')
<li class="breadcrumb-item">
   <a href="{{ route('product.index') }}"><i class="fas fa-boxes"></i>Productos</a>
</li>
@endsection
@section('contenido')
<div class="container-fluid">
    <div class="panel shadow">
        <div class="header">
         <h2 class="title"><i class="fas fa-boxes"></i>Productos</h2>
        </div>
        <div class="body">
            <div class="btns">
                <a class="btn btn-primary" href=" {{ route('product.create') }}"><i class="fas fa-plus"></i>Agregar Producto </a>
            </div>
            <table class="table">

            </table>
        </div>

    </div>
</div>
@endsection
