@extends('layouts.main', ['activePage' => 'users', 'titlePage' => 'Administración'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-info">
                                    <h4 class="card-title">Usuarios</h4>
                                    <p class="card-category">Lista de Usuarios Registrados</p>
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
                                            <a href="{{ route('users.create') }}" class="btn btn-success">Añadir Usuario</a>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead class="text-info">
                                                <th><strong>ID</strong></th>
                                               <th><strong>USUARIO</strong></th> 
                                               <th><strong>CORREO</strong></th>
                                                <th><strong>CREADO</strong></th>
                                                <th class="text-right"><strong>ACCIONES</strong></th>
                                            </thead>
                                            <tbody>
                                                @foreach ($users as $user)
                                                <tr>
                                                    <td>{{$user->id}}</td>
                                                    <td>{{$user->username}}</td>
                                                    <td>{{$user->email}}</td>
                                                    <td>{{$user->created_at}}</td>
                                                    <td class="td-actions text-right">
                                                        <a href="{{ route('users.show', $user->id) }}" class="btn btn-info">
                                                            <i class="material-icons">person</i>
                                                        </a>
                                                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning">
                                                            <i class="material-icons">edit</i>
                                                        </a>
                                                        <form action="{{ route('users.delete', $user->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('¿Esta seguro que quiere eliminar al usuario: {{ $user->username }}')">
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
                                <div class="card-footer m-auto">
                                    {{ $users->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection