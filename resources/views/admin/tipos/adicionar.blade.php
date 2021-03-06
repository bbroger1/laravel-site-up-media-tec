@extends('layouts.admin')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="{{ route('admin.home') }}">Início</a></li>
        <li><a href="{{ route('admin.tipos') }}">Lista de Tipos</a></li>
        <li class="active">Adicionar Tipo</li>
    </ol>
@endsection

@section('content')
    <div class="container">
        <div class="block-header">
            <h2>Tipos</h2>
        </div>

        @include('errors._check')

        <div class="panel panel-default">
            <div class="card-body card-padding">
                <form action="{{ route('admin.tipos.salvar') }}" method="post">
                    {{ csrf_field() }}
                    <div class="container">
                        @include('admin.tipos._form')
                        <div class="panel panel-default">
                            @can('usuario_adicionar')
                                <button class="btn btn-primary">Adicionar</button>
                            @endcan
                            <a href="{{ route('admin.usuarios') }}" class="btn btn-primary"
                               style="width: 100px">Voltar</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection