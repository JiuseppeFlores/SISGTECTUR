@extends('layouts.main', ['activePage' => 'dashboard', 'titlePage' => __('Panel de Inicio')])

@section('content')
  <div class="content">
    <div class="container-fluid">
    <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-info card-header-icon">
              <div class="card-icon">
                <i class="material-icons">account_circle</i>
              </div>
              <p class="card-category">Administración</p>
              <h3 class="card-title">Usuarios</h3>
            </div>
            <div class="card-body" style="text-align:left;">
                  <ul>
                    <li>Administrador</li>
                    <li>Gerencial</li>
                    <li>Cliente</li>
                  </ul>
            </div>
            <div class="card-footer">
              <div class="stats" style="margin: 0 auto;">
                <a href="{{ route('users.index') }}" class="btn btn-success">
                  VER USUARIOS
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-warning card-header-icon">
              <div class="card-icon">
                <i class="material-icons">store</i>
              </div>
              <p class="card-category">Administración</p>
              <h3 class="card-title">Negocios</h3>
            </div>
            <div class="card-body" style="text-align:left;">
              <ul>
                <li>Crear</li>
                <li>Registrar</li>
                <li>Habilitar</li>
              </ul>
            </div>
            <div class="card-footer">
              <div class="stats" style="margin: 0 auto;">
                <a href="{{ route('negocios.index') }}" class="btn btn-success">VER NEGOCIOS</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-primary card-header-icon">
              <div class="card-icon">
                <i class="material-icons">feed</i>
              </div>
              <p class="card-category">Administración</p>
              <h3 class="card-title">Publicaciones</h3>
            </div>
            <div class="card-body" style="text-align: left;">
              <ul>
                <li>Crear</li>
                <li>Validar</li>
                <li>Habilitar</li>
              </ul>
            </div>
            <div class="card-footer">
              <div class="stats" style="margin: 0 auto;">
                <a href="{{ route('publicaciones.index') }}" class="btn btn-success">VER PUBLICACIONES</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection