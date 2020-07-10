<div class="sidebar shadow">
    <div class="card-header">
        <div class="logo">
            <img src="{{ url('static/img/logo.png') }}" class="img-fluid">
        </div>
    </div>
    <div class="seccion-top">
        <div class="user">
            <span class="subtitle">Hola:</span>
            <div class="name">
                {{ Auth::user()->name}} {{ Auth::user()->last_name }}
                <a href="{{ route('logout') }}" data-toggle="tooltip" data-placement="top" title="Salir"><i
                        class="fas fa-sign-out-alt"></i></a>
            </div>
            <div class="email">
                {{ Auth::user()->email }}
            </div>
        </div>
    </div>
    <div class="main">
        <ul>
            <li>
                <a href="{{ route('inicio') }}"><i class="fas fa-house-user"></i>Dashboard</a>
            </li>
            <li>
                <a href="{{  route('category.index', 0) }}"><i class="fas fa-folder-open"></i>Categorias</a>
            </li>
            <li>
                <a href="{{  route('product.index') }}"><i class="fas fa-boxes"></i>Productos</a>
            </li>
            <li>
                <a href="{{ route('user.index') }}"><i class="fas fa-users"></i>Usuarios</a>
            </li>
        </ul>
    </div>
</div>
