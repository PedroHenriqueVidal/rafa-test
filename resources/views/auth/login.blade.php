@extends('layouts.app')
@section('title', 'Entrar')

@section('content')

<div class="row justify-content-center mt-5">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">Entrar</div>
            <div class="card-body">
                <form class="row g-3 container" action="{{ route('authenticate') }}" method="post">
                    @csrf
                    <div class="col-md-12">
                        <label for="inputEmail4" class="form-label">E-mail</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="inputEmail4" name="email" value="{{ old('email') }}" placeholder="exemplo@email.com">
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                    </div>
                    <div class="col-md-12">
                        <label for="inputPassword4" class="form-label">Senha</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="inputPassword4" name="password" placeholder="Senha">
                            @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                    </div>
                    
                    
                    <div class="col-12">
                        <input type="submit" class="btn btn-success" value="Entrar">
                    </div>
                </form>
            </div>
        </div>
    </div>    
</div>


@endsection