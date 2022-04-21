@extends('layouts.main', ['activePage' => 'users', 'titlePage' => 'Información del Usuario'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <div class="card-title">Publicación: <strong>{{ $publicacion->id }}</strong></div>
                        <p class="card-category">Datos de la Publicación></p>
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
                                        <p class="card-category">Información de la Publicacion</p>
                                        <h3 class="card-title">Publicacion: {{ $publicacion->title }}</h3>
                                    </div>
                                    <div class="card-body" style="text-align:left;">
                                        <table class="table table-hover">
                                            <thead class="text-info">
                                                <th></th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><strong>ID</strong></td>
                                                    <td>{{$publicacion->id}}</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>TITULO</strong></td>
                                                    <td>{{$publicacion->title}}</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>DESCRIPCIÓN</strong></td>
                                                    <td>{{$publicacion->description}}</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>NEGOCIO</strong></td>
                                                    <td>{{$publicacion->business_id}}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="card-footer m-auto">
                                        <a href="{{ route('negocios.show',$publicacion->business_id) }}" class="btn btn-info">VOLVER</a>
                                        <a href="{{ route('publicaciones.edit',$publicacion->id) }}" class="btn btn-warning">EDITAR</a>
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
