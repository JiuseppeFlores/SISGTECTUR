@extends('layouts.main', ['activePage'=>'publicaciones', 'titlePage'=>'Crear Nueva Publicación']);
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('publicaciones.store',$negocio->id) }}" method="post" class="form-horizontal">
                        @csrf
                        <div class="card">
                            <div class="card-header card-header-warning">
                                <div class="card-icon">
                                    <i class="material-icons">feed</i>
                                </div>
                                <h4 class="card-title">Publicación</h4>
                                <p>Ingresar datos de la publicación</p>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <label for="title" class="col-sm-2 col-form-label">Titulo</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('title') ? ' has-danger' : '' }}">
                                            <input type="text" name="title" class="form-control" placeholder="{{ __('Ingrese un titulo') }}" value="{{ old('title') }}" autofocus>
                                            @if ($errors->has('title'))
                                                <div id="title-error" class="error text-danger pl-3" for="title" style="display: block;">
                                                    <strong>{{ $errors->first('title') }}</strong>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="title" class="col-sm-2 col-form-label">Descripción</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                                            <textarea rows="3" type="text" name="description" class="form-control" placeholder="{{ __('Ingrese una descripcion...') }}" value="{{ old('description') }}" autofocus></textarea>
                                            @if ($errors->has('description'))
                                                <div id="description-error" class="error text-danger pl-3" for="description" style="display: block;">
                                                    <strong>{{ $errors->first('description') }}</strong>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn btn-success">CREAR PUBLICACION</button>
                            </div>
                        </div>
                    </form>
                          
                </div>
            </div>
        </div>
    </div>
@endsection