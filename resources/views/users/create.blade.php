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
                                <div class="card-icon">
                                    <i class="material-icons">person_add</i>
                                </div>
                                <h4 class="card-title">Usuario</h4>
                                <p>Ingresar datos del Usuario</p>
                            </div>
                            <div class="card-body">
                                @if ($errors->has('name') || $errors->has('name') || $errors->has('last_name') ||
                                $errors->has('mothers_last_name') || $errors->has('date_birth') ||
                                $errors->has('phone') || $errors->has('cellphone'))
                                <div class="alert alert-danger" role="danger">
                                    <ul>
                                        <li>Datos inválidos en los DATOS ADICIONALES</li>
                                        <!-- @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach -->
                                    </ul>
                                </div>
                                @endif
                                <div class="row">
                                    <label for="username" class="col-sm-2 col-form-label">Tipo de Usuario</label>
                                    <div class="col-sm-7">
                                        <select id="user_type" name="user_type" class="form-control form-select" value="">
                                            @foreach ($tipoUsuario as $tipo)
                                                @if ($tipo->id == 3)
                                                <option value="{{ $tipo->id }}" selected>{{ $tipo->name }}</option>
                                                @else
                                                <option value="{{ $tipo->id }}">{{ $tipo->name }}</option>
                                                @endif
                                            @endforeach
                                        </select>    
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="username" class="col-sm-2 col-form-label">Usuario</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('username') ? ' has-danger' : '' }}">
                                            <input type="text" name="username" class="form-control" placeholder="{{ __('Ingrese su usuario...') }}" value="{{ old('username') }}" autofocus>
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
                                        <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                            <input type="email" name="email" class="form-control" placeholder="{{ __('Ingrese su correo electrónico') }}"  value="{{ old('email') }}" autofocus>
                                            @if ($errors->has('email'))
                                                <div id="email-error" class="error text-danger pl-3" for="email" style="display: block;">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="password" class="col-sm-2 col-form-label">Contraseña</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">    
                                            <input type="password" name="password" class="form-control" placeholder="{{ __('Ingrese una Contraseña') }}" autofocus>
                                            @if ($errors->has('password'))
                                                <div id="password-error" class="error text-danger pl-3" for="password" style="display: block;">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="password_confirmation" class="col-sm-2 col-form-label">Confirmar Contraseña</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-danger' : '' }}">    
                                            <input type="password" name="password_confirmation" class="form-control" placeholder="{{ __('Confirmar Contraseña') }}" autofocus>
                                            @if ($errors->has('password_confirmation'))
                                                <div id="password_confirmation-error" class="error text-danger pl-3" for="password_confirmation" style="display: block;">
                                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br/>
                            <div id="adicionales" style="display:none;">
                                <div class="card-header card-header-info" id="datos_ad1">
                                    <div class="card-icon card-header-info">
                                        <i class="material-icons">person</i>
                                    </div>
                                    <h4 class="card-title">Datos Adicionales</h4>
                                    <p>Ingrese datos adicionales del usuario</p>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <label for="ci" class="col-sm-2 col-form-label">C.I.</label>
                                        <div class="col-sm-7">
                                            <div class="form-group{{ $errors->has('ci') ? ' has-danger' : '' }}">
                                                <input id="ci" type="text" name="ci" class="form-control" placeholder="{{ __('Ingrese su ci...') }}" value="{{ old('ci') }}" autofocus>
                                                @if ($errors->has('ci'))
                                                    <div id="ci-error" class="error text-danger pl-3" for="ci" style="display: block;">
                                                        <strong>{{ $errors->first('ci') }}</strong>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label for="name" class="col-sm-2 col-form-label">Nombre(s)</label>        
                                        <div class="col-sm-7">
                                            <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                                <input id="name" type="text" name="name" class="form-control" placeholder="{{ __('Ingrese su nombre') }}"  value="{{ old('name') }}" autofocus>
                                                @if ($errors->has('name'))
                                                    <div id="name-error" class="error text-danger pl-3" for="ci" style="display: block;">
                                                        <strong>{{ $errors->first('name') }}</strong>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="container">
                                            <div class="row">
                                                <label for="last_name" class="col-sm-2 col-form-label strong">Ap. Paterno</label>        
                                                <div class="col-sm-4">
                                                    <div class="form-group{{ $errors->has('last_name') ? ' has-danger' : '' }}">
                                                        <input id="last_name" type="text" name="last_name" class="form-control" placeholder="{{ __('Ingrese su apellido paterno') }}"  value="{{ old('last_name') }}" autofocus>
                                                        @if ($errors->has('last_name'))
                                                            <div id="last_name-error" class="error text-danger pl-3" for="last_name" style="display: block;">
                                                                <strong>{{ $errors->first('last_name') }}</strong>
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>
                                                <label for="mothers_last_name" class="col-sm-2 col-form-label">Ap. Materno</label>        
                                                <div class="col-sm-4">
                                                    <div class="form-group{{ $errors->has('mothers_last_name') ? ' has-danger' : '' }}">
                                                        <input id="mothers_last_name" type="text" name="mothers_last_name" class="form-control" placeholder="{{ __('Ingrese su apellido materno') }}"  value="{{ old('mothers_last_name') }}" autofocus>
                                                        @if ($errors->has('mothers_last_name'))
                                                            <div id="mothers_last_name-error" class="error text-danger pl-3" for="mothers_last_name" style="display: block;">
                                                                <strong>{{ $errors->first('mothers_last_name') }}</strong>
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label for="date_birth" class="col-sm-2 col-form-label">Fec. Nacimiento</label>        
                                        <div class="col-sm-7">
                                            <div class="form-group{{ $errors->has('date_birth') ? ' has-danger' : '' }}">
                                                <input id="date_birth" name="date_birth" type="text" class="form-control datetimepicker" value="" placeholder="Ejemplo: 21-06-2018"/>
                                                @if ($errors->has('date_birth'))
                                                    <div id="date_birth-error" class="error text-danger pl-3" for="date_birth" style="display: block;">
                                                        <strong>{{ $errors->first('date_birth') }}</strong>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="container">
                                            <div class="row">
                                                <label for="phone" class="col-sm-2 col-form-label">Teléfono</label>        
                                                <div class="col-sm-4">
                                                    <div class="form-group{{ $errors->has('phone') ? ' has-danger' : '' }}">
                                                        <input id="phone" type="text" name="phone" class="form-control" placeholder="{{ __('Ingrese su número de teléfono') }}"  value="{{ old('mothers_last_name') }}" autofocus>
                                                        @if ($errors->has('phone'))
                                                            <div id="phone-error" class="error text-danger pl-3" for="phone" style="display: block;">
                                                                <strong>{{ $errors->first('phone') }}</strong>
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>
                                                <label for="cellphone" class="col-sm-2 col-form-label">Celular</label>        
                                                <div class="col-sm-4">
                                                    <div class="form-group{{ $errors->has('cellphone') ? ' has-danger' : '' }}">
                                                        <input id="cellphone" type="text" name="cellphone" class="form-control" placeholder="{{ __('Ingrese su numero de celular') }}"  value="{{ old('cellphone') }}" autofocus>
                                                        @if ($errors->has('cellphone'))
                                                            <div id="cellphone-error" class="error text-danger pl-3" for="cellphone" style="display: block;">
                                                                <strong>{{ $errors->first('cellphone') }}</strong>
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer m-auto">
                                <input type="text" id="datos_adicionales" name="datos_adicionales" style="display:none;" value="0">
                                <button type="submit" class="btn btn-success">CREAR USUARIO</button>
                                <button type="button" id="btn_datos" class="btn btn-warning" onclick="mostrarDatos()">DATOS ADICIONALES</button>
                            </div>
                        </div>
                    </form>                 
                </div>
            </div>
        </div>
    </div>
    <script>
        var clic = 1;
        function mostrarDatos(){ 
            if(clic==1){
                document.getElementById("adicionales").style.display = "block";
                document.getElementById("datos_adicionales").setAttribute('value','1');
                document.getElementById("btn_datos").innerHTML = "DESCARTAR DATOS";
                document.getElementById("btn_datos").className = "btn btn-danger";
                clic = clic + 1;
            } else{
                if(confirm('Esta seguro que desea DESCARTAR los Datos Adicionales \n\nLOS CAMBIOS SE PERDERAN PERMANENTEMENTE.')){
                    document.getElementById("adicionales").style.display = "none";
                    document.getElementById("datos_adicionales").setAttribute('value','0');     
                    document.getElementById("btn_datos").innerHTML = "DATOS ADICIONALES";
                    document.getElementById("btn_datos").className = "btn btn-warning";
                    limpiarDatos();
                    clic = 1;
                }
            }   
        }
        function limpiarDatos(){
            document.getElementById("ci").value = "";
            document.getElementById("name").value = "";
            document.getElementById("last_name").value = "";
            document.getElementById("mothers_last_name").value = "";
            document.getElementById("date_birth").value = "";
            document.getElementById("phone").value = "";
            document.getElementById("cellphone").value = "";
        }
    </script>
@endsection