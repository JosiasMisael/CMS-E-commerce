@extends('admin.master')
@section('title','Users')
@section('breadcrumb')
<li class="breadcrumb-item">
   <a href="{{ route('user.index') }}"><i class="fas fa-users"></i>Usuarios</a>
</li>
@endsection
@section('contenido')
<div class="container-fluid">
    <div class="panel shadow">
        <div class="header">
         <h2 class="title"><i class="fas fa-users"></i>Usuarios</h2>
        </div>
        <div class="body">
            <table class="table">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Nombre</td>
                        <td>Correo</td>
                        <td>Acciones</td>
                    </tr>
                </thead>
                @forelse ($users as $user)
                    <tbody>
                          <td>{{ $user->id }}</td>
                          <td>{{ $user->name}} {{ $user->last_name }}</td>
                          <td>{{ $user->email }}</td>
                          <td>
                              <div class="opts">
                              <a href="{{ route('user.edit', $user)}}" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fas fa-edit"></i></a>
                              <a href="{{ route('user.delete', $user)}}" data-toggle="tooltip" data-placement="top" title="Eliminar"><i class="fas fa-trash"></i></a>
                               </div>
                            </td>
                            @empty
                         <td>No hay Usuarios</td>
                        </tbody>
                        @endforelse

            </table>
        </div>

    </div>
</div>
@endsection
