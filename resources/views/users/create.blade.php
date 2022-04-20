@extends('layouts.main', ['activePage'=>'users', 'titlePage'=>'Crear Nuevo Usuario']);
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('users.store') }}" method="post" class="form-horizontal">
                        @csrf
                        <div class="card">
                            <div class="card-header card-header-info">
                                <h4 class="card-title">Usuario</h4>
                                <p>Ingresar datos del Usuario</p>
                            </div>
                            <div class="card-body">
                                <!-- <div class="row">
                                    <div class="bmd-form-group{{ $errors->has('name') ? ' has-danger' : '' }} col-sm-10">
                                        <div class="input-group">
                                            <label for="name" class="col-sm-2 col-form-label">Nombre</label>
                                            <div class="col-sm-7">
                                                <input type="text" name="name" class="form-control" placeholder="{{ __('Ingrese un Nombre') }}" value="{{ old('name') }}" autofocus>
                                            </div>
                                        </div>
                                        @if ($errors->has('name'))
                                            <div id="name-error" class="error text-danger pl-3" for="name" style="display: block;">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </div>
                                        @endif
                                    </div>
                                </div> -->
                                <div class="row">
                                    <div class="bmd-form-group{{ $errors->has('username') ? ' has-danger' : '' }} col-sm-10">
                                        <div class="input-group">
                                            <label for="username" class="col-sm-2 col-form-label">Nombre de Usuario</label>
                                            <div class="col-sm-7">
                                                <input type="text" name="username" class="form-control" placeholder="{{ __('Ingrese un Nombre de Usuario') }}" value="{{ old('username') }}" autofocus>
                                            </div>
                                        </div>
                                        @if ($errors->has('username'))
                                            <div id="username-error" class="error text-danger pl-3" for="username" style="display: block;">
                                                <strong>{{ $errors->first('username') }}</strong>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="bmd-form-group{{ $errors->has('email') ? ' has-danger' : '' }} col-sm-10">
                                        <div class="input-group">
                                            <label for="email" class="col-sm-2 col-form-label">Correo Electrónico</label>
                                            <div class="col-sm-7">
                                                <input type="email" name="email" class="form-control" placeholder="{{ __('Ingrese una dirección de Correo') }}"  value="{{ old('email') }}" autofocus>
                                            </div>
                                        </div>
                                        @if ($errors->has('email'))
                                            <div id="email-error" class="error text-danger pl-3" for="email" style="display: block;">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="bmd-form-group{{ $errors->has('password') ? ' has-danger' : '' }} col-sm-10">
                                        <div class="input-group">
                                            <label for="password" class="col-sm-2 col-form-label">Contraseña</label>
                                            <div class="col-sm-7">
                                                <input type="password" name="password" class="form-control" placeholder="{{ __('Ingrese una Contraseña') }}" autofocus>
                                            </div>
                                        </div>
                                        @if ($errors->has('password'))
                                            <div id="password-error" class="error text-danger pl-3" for="password" style="display: block;">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="bmd-form-group{{ $errors->has('password_confirmation') ? ' has-danger' : '' }} col-sm-10">
                                        <div class="input-group">
                                            <label for="password_confirmation" class="col-sm-2 col-form-label">Confirmar Contraseña</label>
                                            <div class="col-sm-7">
                                                <input type="password" name="password_confirmation" class="form-control" placeholder="{{ __('Confirmar Contraseña') }}" autofocus>
                                            </div>
                                        </div>
                                        @if ($errors->has('password_confirmation'))
                                            <div id="password_confirmation-error" class="error text-danger pl-3" for="password_confirmation" style="display: block;">
                                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn btn-primary">Guardar </button>
                            </div>
                        </div>
                    </form>
                          
                </div>
            </div>
        </div>
    </div>
@endsection