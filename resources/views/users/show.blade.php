@extends('layouts.main', ['activePage' => 'users', 'titlePage' => 'Información del Usuario'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <div class="card-title">Usuario: <strong>{{ $user->id }}</strong></div>
                        <p class="card-category">Vista detallada del Usuario: <strong>{{ $user->username }}</strong></p>
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
                            <div class="col-md-6">
                                <div class="card card-user">
                                    <div class="card-body">
                                        <p class="card-text">
                                            <div class="author">
                                                <a href="#" class="d-flex">
                                                    <img src="{{ asset('/img/default-avatar.png') }}" alt="image" class="avatar">
                                                    <h5 class="title mx-3">{{ $user->name }}</h5>
                                                </a>
                                                <p class="description">
                                                    {{ $user->username }} <br/>
                                                    {{ $user->email }} <br/>
                                                    {{ $user->created_at}} <br/>
                                                </p>
                                            </div>
                                        </p>
                                        <div class="card-description">
                                            asdasdasdasdasd as da sd as d as da sd asdasd asd as dasd as das d as dasdasd asd a sda sdasd asd asd asd.
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="button-container">
                                            <a href="{{ route('users.index') }}" class="btn btn-sm btn-info mr-3">Volver</a>
                                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-warning">Editar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
