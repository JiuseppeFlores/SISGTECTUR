@extends('layouts.main', ['activePage' => 'negocios', 'titlePage' => 'Información del Negocio'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <div class="card-title">NEGOCIO: <strong>{{ $negocio->id }}</strong></div>
                        <p class="card-category">Vista detallada del Usuario: <strong>{{ strtoupper($negocio->name) }}</strong></p>
                    </div>
                    <div class="card-body">
                        @if (session('success'))
                        <div class="alert alert-success" role="success">
                            {{ session('success') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="card card-stats">
                                    <div class="card-header card-header-success card-header-icon">
                                        <div class="card-icon">
                                            <i class="material-icons">store</i>
                                        </div>
                                        <p class="card-category">Información del Usuario</p>
                                        <h3 class="card-title">Negocio: {{ $negocio->name }}</h3>
                                    </div>
                                    <div class="card-body" style="text-align:left;">
                                        <table class="table table-hover">
                                            <thead class="text-info">
                                                <th></th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><strong>ID</strong></td>
                                                    <td>{{$negocio->id}}</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>NOMBRE</strong></td>
                                                    <td>{{$negocio->name}}</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>DESCRIPCIÓN</strong></td>
                                                    <td>{{$negocio->description}}</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>NIT</strong></td>
                                                    <td>{{$negocio->nit}}</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>CORREO ELECTRÓNICO</strong></td>
                                                    <td>{{$negocio->email}}</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>TELÉFONO</strong></td>
                                                    <td>{{$negocio->phone}}</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>CELULAR</strong></td>
                                                    <td>{{$negocio->cellphone}}</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>TIPO DE NEGOCIO</strong></td>
                                                    <td>{{$tipoNegocio->name}}</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>GERENTE</strong></td>
                                                    <td>{{$negocio->manager_id}}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="card-footer m-auto">
                                        <a href="{{ route('negocios.index') }}" class="btn btn-info">VOLVER</a>
                                        <a href="{{ route('negocios.edit',$negocio->id) }}" class="btn btn-warning">EDITAR</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="card card-stats">
                                    <div class="card-header card-header-warning card-header-icon">
                                        <div class="card-icon">
                                            <i class="material-icons">feed</i>
                                        </div>
                                        <p class="card-category">Publicaciones del Negocio</p>
                                        <h3 class="card-title">Publicaciones</h3>
                                    </div>
                                    <div class="card-body" style="text-align:left;">
                                        @if($sw)
                                        <table class="table table-hover">
                                            <thead class="text-info">
                                                <th>ID</th>
                                                <th>NOMBRE</th>
                                                <th>ACCION</th>
                                            </thead>
                                            <tbody>
                                                @foreach ($publicaciones as $publicacion)
                                                <tr>
                                                    <td>{{$publicacion->id}}</td>
                                                    <td>{{$publicacion->title}}</td>
                                                    <td class="td-actions text-right">
                                                        <a href="{{ route('publicaciones.show', $publicacion->id) }}" class="btn btn-info">
                                                            <i class="material-icons">person</i>
                                                        </a>
                                                        <a href="{{ route('publicaciones.edit', $publicacion->id) }}" class="btn btn-warning">
                                                            <i class="material-icons">edit</i>
                                                        </a>
                                                        <form action="{{ route('publicaciones.delete', $publicacion->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('¿Esta seguro que quiere eliminar al usuario: {{ $publicacion->title }}')">
                                                        @csrf
                                                        @method('DELETE')
                                                            <button type="submit" class="btn btn-danger" rel="tooltip">
                                                                <i class="material-icons">close</i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                            
                                        </table>
                                        @else
                                        <ul>
                                            <li>{{ $publicaciones }}</li>
                                        </ul>
                                        @endif
                                    </div>
                                    <div class="card-footer m-auto">
                                        <a href="{{ route('publicaciones.create',$negocio->id) }}" class="btn btn-success">CREAR PUBLICACIÓN</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
