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
                        <p>Você não possuí compras no momento</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
