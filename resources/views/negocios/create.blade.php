@extends('layouts.main', ['activePage'=>'negocios', 'titlePage'=>'Crear Negocio']);
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('negocios.store') }}" method="post" class="form-horizontal">
                        @csrf
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">NEGOCIO</h4>
                                <p>Ingrese la información correspondiente al negocio:</p>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <label for="name" class="col-sm-2 col-form-label">Nombre</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                            <input type="text" name="name" class="form-control" placeholder="{{ __('Ingrese nombre del negocio') }}" value="{{ old('name') }}" autofocus>
                                            @if ($errors->has('name'))
                                                <div id="name-error" class="error text-danger pl-3" for="name" style="display: block;">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="description" class="col-sm-2 col-form-label">Descripción</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                                            <textarea rows="3" type="text" name="description" class="form-control" placeholder="{{ __('Ingrese descripción del negocio') }}" value="{{ old('description') }}" autofocus></textarea>
                                            @if ($errors->has('description'))
                                                <div id="description-error" class="error text-danger pl-3" for="description" style="display: block;">
                                                    <strong>{{ $errors->first('description') }}</strong>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="nit" class="col-sm-2 col-form-label">NIT</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('nit') ? ' has-danger' : '' }}">
                                            <input type="text" name="nit" class="form-control" placeholder="{{ __('Ingrese NIT del negocio') }}" value="{{ old('nit') }}" autofocus>
                                            @if ($errors->has('nit'))
                                                <div id="nit-error" class="error text-danger pl-3" for="nit" style="display: block;">
                                                    <strong>{{ $errors->first('nit') }}</strong>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="email" class="col-sm-2 col-form-label">Correo Electrónico</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                            <input type="email" name="email" class="form-control" placeholder="{{ __('Ingrese correo del negocio') }}" value="{{ old('email') }}" autofocus>
                                            @if ($errors->has('email'))
                                                <div id="email-error" class="error text-danger pl-3" for="email" style="display: block;">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="phone" class="col-sm-2 col-form-label">Teléfono</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('phone') ? ' has-danger' : '' }}">
                                            <input type="text" name="phone" class="form-control" placeholder="{{ __('Ingrese telefono del negocio') }}" value="{{ old('phone') }}" autofocus>
                                            @if ($errors->has('phone'))
                                                <div id="phone-error" class="error text-danger pl-3" for="phone" style="display: block;">
                                                    <strong>{{ $errors->first('phone') }}</strong>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="cellphone" class="col-sm-2 col-form-label">Celular</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('cellphone') ? ' has-danger' : '' }}">
                                            <input type="text" name="cellphone" class="form-control" placeholder="{{ __('Ingrese celular del negocio') }}" value="{{ old('cellphone') }}" autofocus>
                                            @if ($errors->has('cellphone'))
                                                <div id="cellphone-error" class="error text-danger pl-3" for="cellphone" style="display: block;">
                                                    <strong>{{ $errors->first('cellphone') }}</strong>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="business_type_id" class="col-sm-2 col-form-label">Tipo de Negocio</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('business_type_id') ? ' has-danger' : '' }}">
                                            <select name="business_type_id" class="form-control form-select" value="">
                                                @foreach ($tipoNegocios as $tipo)
                                                    @if ($tipo->id == 1)
                                                    <option value="{{ $tipo->id }}" selected>{{ $tipo->name }}</option>
                                                    @else
                                                    <option value="{{ $tipo->id }}">{{ $tipo->name }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn btn-primary">Crear Negocio </button>
                            </div>
                        </div>
                    </form>
                          
                </div>
            </div>
        </div>
    </div>
@endsection