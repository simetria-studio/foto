@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row justify-content-center my-5">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        @component('components.menu-user-painel')
                        @endcomponent
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <h3>Bem vindo {{ auth()->user()->name }}</h3>
                        <p>Você fez um total de 0 pedidos essa semana</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
