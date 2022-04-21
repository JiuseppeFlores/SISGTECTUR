@extends('layouts.main', ['activePage' => 'publicaciones', 'titlePage' => 'Publicaciones'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title">Publicaciones</h4>
                                    <p class="card-category">Lista de Publicaciones</p>
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
                                        <div class="col-12 text-right">
                                            <a href="{{ route('publicaciones.create') }}" class="btn btn-success">Añadir Publicación</a>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead class="thead-dark">
                                                <th>ID</th>
                                                <th>TITULO</th>
                                                <th>DESCRIPCION</th>
                                                <th>GERENTE</th>
                                                <th class="text-right">ACCIONES</th>
                                            </thead>
                                            <tbody>
                                                @foreach ($publicaciones as $pub)
                                                <tr>
                                                    <td>{{$pub->id}}</td>
                                                    <td>{{$pub->title}}</td>
                                                    <td>{{$pub->description}}</td>
                                                    <td>{{$pub->business_id}}</td>
                                                    <td class="td-actions text-right">
                                                        <a href="{{ route('publicaciones.show', $pub->id) }}" class="btn btn-info">
                                                            <i class="material-icons">person</i>
                                                        </a>
                                                        <a href="{{ route('publicaciones.edit', $pub->id) }}" class="btn btn-warning">
                                                            <i class="material-icons">edit</i>
                                                        </a>
                                                        <form action="{{ route('publicaciones.delete', $pub->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('¿Esta seguro que quiere eliminar al usuario: {{ $pub->title }}')">
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
                                    </div>
                                </div>
                                <div class="card-footer ml-auto">
                                    {{ $publicaciones->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection