@extends('layouts.app')
@section('title', 'Cadastro')

@section('content')

<div class="row justify-content-center mt-5">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">Cadastrar</div>
            <div class="card-body">
                <form class="row g-3 container" id="registerForm" action="{{ route('store') }}" method="post">
                    <div class="col-12">
                        <label for="inputName" class="form-label">Nome</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="inputName" name="name" value="{{ old('name') }}" placeholder="Nome">
                            @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                    </div>
                    <div class="col-md-12">
                        <label for="inputEmail4" class="form-label">E-mail</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="inputEmail4" name="email" value="{{ old('email') }}" placeholder="exemplo@email.com">
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Senha</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="inputPassword4" name="password" placeholder="Senha">
                            @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Confirmar senha</label>
                        <input type="password" class="form-control" id="inputPassword4" name="password_confirmation" placeholder="Confirmar senha">
                    </div>
                    
                    
                    <div class="col-12">
                        <input type="submit" class="btn btn-success" value="Cadastrar">
                    </div>
                </form>
            </div>
        </div>
    </div>    
</div>

@endsection