@extends('layouts.main', ['activePage'=>'users', 'titlePage'=>'Editar Usuario']);
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('users.update', $user->id, true ) }}" method="post" class="form-horizontal">
                    @csrf
                    @method('PUT')
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">EDITAR PERFIL</h4>
                            <p class="card-category">Información del Usuario</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <label for="username" class="col-sm-2 col-form-label">Usuario</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('old_password') ? ' has-danger' : '' }}">
                                        <input type="text" name="username" class="form-control" value="{{ old('username', $user->username) }}" autofocus>
                                        @if ($errors->has('username'))
                                            <div id="username-error" class="error text-danger pl-3" for="username" style="display: block;">
                                                <strong>{{ $errors->first('username') }}</strong>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label for="email" class="col-sm-2 col-form-label">Correo Electrónico</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('old_password') ? ' has-danger' : '' }}">
                                        <input type="email" name="email" class="form-control" value="{{ old('email', $user->email) }}" autofocus>
                                        @if ($errors->has('email'))
                                            <div id="email-error" class="error text-danger pl-3" for="email" style="display: block;">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn btn-success">{{ __('Actualizar Datos') }}</button>
                            </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form method="post" action="{{ route('users.update', $user->id, false ) }}" class="form-horizontal">
                    @csrf
                    @method('PUT')
                    <div class="card ">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">{{ __('CAMBIAR CONTRASEÑA') }}</h4>
                            <p class="card-category">{{ __('Contraseña') }}</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <label class="col-sm-2 col-form-label" for="input-current-password">{{ __('Contraseña Actual:') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('old_password') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('old_password') ? ' is-invalid' : '' }}" input type="password" name="old_password" id="input-current-password" placeholder="{{ __('Contraseña Actual') }}" value="" required />
                                        @if ($errors->has('old_password'))
                                            <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('old_password') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 col-form-label" for="input-password">{{ __('Nueva Contraseña:') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" id="input-password" type="password" placeholder="{{ __('Nueva Contraseña') }}" value="" required />
                                        @if ($errors->has('password'))
                                            <span id="password-error" class="error text-danger" for="input-password">{{ $errors->first('password') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 col-form-label" for="input-password-confirmation">{{ __('Confirmar Nueva Contraseña:') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group">
                                        <input class="form-control" name="password_confirmation" id="input-password-confirmation" type="password" placeholder="{{ __('Confirmar Nueva Contraseña') }}" value="" required />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer ml-auto mr-auto">
                            <button type="submit" class="btn btn-success">{{ __('Cambiar Contraseña') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection