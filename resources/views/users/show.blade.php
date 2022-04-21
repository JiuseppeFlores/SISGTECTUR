@extends('layouts.main', ['activePage' => 'users', 'titlePage' => 'Información del Usuario'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-info">
                        <div class="card-icon">
                            <i class="material-icons">account_circle</i>
                        </div>
                        <div class="card-title">Usuario: <strong>{{ $user->id }}</strong></div>
                        <p class="card-category">Vista detallada del Usuario: <strong>{{ $user->username }}</strong></p>
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
                                            <i class="material-icons">account_circle</i>
                                        </div>
                                        <p class="card-category">Información del Usuario</p>
                                        <h3 class="card-title">Usuario: {{ $user->username }}</h3>
                                    </div>
                                    <div class="card-body" style="text-align:left;">
                                    <table class="table table-hover">
                                            <thead class="text-info">
                                                <th></th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><strong>ID</strong></td>
                                                    <td><td>{{$user->id}}</td></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>USUARIO</strong></td>
                                                    <td><td>{{$user->username}}</td></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>CORREO ELECTRÓNICO</strong></td>
                                                    <td><td>{{$user->email}}</td></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>FECHA DE CREACIÓN</strong></td>
                                                    <td><td>{{$user->created_at}}</td></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>TIPO DE USUARIO</strong></td>
                                                    <td><td>{{$user->user_type->name}}</td></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="card card-stats">
                                    <div class="card-header card-header-warning card-header-icon">
                                        <div class="card-icon">
                                            <i class="material-icons">person</i>
                                        </div>
                                        <p class="card-category">Información de la Persona</p>
                                        <h3 class="card-title">Datos Adicionales</h3>
                                    </div>
                                    <div class="card-body" style="text-align:left;">
                                        @if($sw)
                                        <table class="table table-hover">
                                            <thead class="text-info">
                                                <th></th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><strong>CI</strong></td>
                                                    <td><td>{{$persona->ci}}</td></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>NOMBRE</strong></td>
                                                    <td><td>{{$persona->name}}</td></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>APELLIDO PATERNO</strong></td>
                                                    <td><td>{{$persona->last_name}}</td></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>APELLIDO MATERNO</strong></td>
                                                    <td><td>{{$persona->mothers_last_name}}</td></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>FECHA DE NACIMIENTO</strong></td>
                                                    <td><td>{{$persona->date_birth}}</td></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>TELÉFONO</strong></td>
                                                    <td><td>{{$persona->phone}}</td></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>CELULAR</strong></td>
                                                    <td><td>{{$persona->cellphone}}</td></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        @else
                                        <ul>
                                            <li>{{ $persona }}</li>
                                        </ul>
                                        @endif
                                    </div>
                                    <div class="card-footer">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="button-container m-auto">
                                <a href="{{ route('users.index') }}" class="btn btn-info mr-3">Volver</a>
                                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning">Editar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
