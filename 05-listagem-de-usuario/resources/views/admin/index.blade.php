@extends('template.users')
@section('title', 'Listagem de Usuários')
@section('body')

    <div class="justify-content-center m-5">
        <div class="card" style="width: 18rem;">
            <img src=" {{ asset('storage/dashboard-image') }}" class="card-img-top" alt="Dash">
            <div class="card-body">
                <h5 class="card-title">Bem vindo ao Painel de controle</h5>
            </div>
        </div>
    </div>

@endsection