@extends('layouts.app')
@section('title', 'Página inicial')

@section('content')

<div class="row justify-content-center mt-5">
    <div class="col-md-8">

        

        @if ($message = Session::get('success'))
            <div class="alert">
                <h1>{{ $message }}</h1>
            </div>
        @else
            <div>
                <h1>Bem vindo, {{ Auth::user()->name }}!</h1>
            </div>       
        @endif 
        <hr>
        <h2>Lista de funções</h2>
        <div class="card-list">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="./src/img/bookRegisterImg.webp" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Cadastro de livros</h5>
                    <p class="card-text">Faça o cadastro de novos livros.</p>
                    <a href="{{ route('register-book') }}" class="btn btn-primary">Clique aqui</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="./src/img/bookListingImg.webp" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Lista de livros</h5>
                    <p class="card-text">Veja aqui, todos os livros que você cadastrou.</p>
                    <a href="{{ route('list-book') }}" class="btn btn-primary">Clique aqui</a>
                </div>
            </div>
        </div>

            
    </div>    
</div>





@endsection