@extends('layouts.main', ['activePage' => 'negocios', 'titlePage' => 'Negocios Registrados'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title">Negocios</h4>
                                    <p class="card-category">Lista de Negocios Registrados</p>
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
                                            <a href="{{ route('negocios.create') }}" class="btn btn-success">Añadir Negocio</a>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead class="thead-dark">
                                                <th>ID</th>
                                                <th>NOMBRE</th>
                                                <th>NIT</th>
                                                <th>TIPO NEGOCIO</th>
                                                <th class="text-right">ACCIONES</th>
                                            </thead>
                                            <tbody>
                                                @foreach ($negocios as $negocio)
                                                <tr>
                                                    <td>{{$negocio->id}}</td>
                                                    <td>{{$negocio->name}}</td>
                                                    <td>{{$negocio->nit}}</td>
                                                    @foreach ($tipoNegocio as $tipo)
                                                        @if($tipo->id == $negocio->business_type_id)
                                                        <td>{{ $tipo->name }}</td>
                                                        @endif
                                                    @endforeach
                                                    <td class="td-actions text-right">
                                                        <a href="{{ route('negocios.show', $negocio->id) }}" class="btn btn-info">
                                                            <i class="material-icons">person</i>
                                                        </a>
                                                        <a href="{{ route('negocios.edit', $negocio->id) }}" class="btn btn-warning">
                                                            <i class="material-icons">edit</i>
                                                        </a>
                                                        <form action="{{ route('negocios.delete', $negocio->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('¿Esta seguro que quiere eliminar el negocio: {{ $negocio->name }}')">
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
                                    {{ $negocios->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection