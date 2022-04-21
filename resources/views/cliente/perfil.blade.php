@extends('cliente.main')

@section('content')
<div class="container">
    <div class="container-fluid">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                    <div class="card-icon">
                        <i class="material-icons">store</i>
                    </div>
                    <p class="card-category">Información del Usuario</p>
                    <h3 class="card-title">Cuenta Cliente</h3>
                </div>
                <div class="card-body" style="text-align:left;">
                        <table class="table table-hover">
                            <thead class="text-info">
                                <th></th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>USUARIO</strong></td>
                                    <td>{{$usuario->username}}</td>
                                </tr>
                                <tr>
                                    <td><strong>CORREO ELECTRÓNICO</strong></td>
                                    <td>{{$usuario->email}}</td>
                                </tr>
                                <tr>
                                    <td><strong>FECHA DE CREACION</strong></td>
                                    <td>{{$usuario->created_at}}</td>
                                </tr>
                                <tr>
                                    <td><strong>TIPO DE USUARIO</strong></td>
                                    <td>{{$tipoUsuario->name}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
                        

@endsection