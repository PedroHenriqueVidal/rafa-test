@extends('layouts.app')
@section('title', 'Cadastro de livros')

@section('content')

<div class="row justify-content-center mt-5">
    <div class="col-md-8">

        <div class="card">
            <div class="card-body">
                <form class="row g-3 container" id="registerBookForm" action="{{ route('store-book') }}" method="post">
                    @csrf()
                    <div class="col-12">
                        <label for="inputTitle" class="form-label">Título</label>
                        <input type="text" class="form-control" id="inputTitle" name="title" value="{{ old('title') }}" placeholder="Título">
                            @if ($errors->has('title'))
                                <span class="text-danger">{{ $errors->first('title') }}</span>
                            @endif
                    </div>
                    <div class="col-md-12">
                        <label for="inputAuthor" class="form-label">Autor</label>
                        <input type="text" class="form-control" id="inputAuthor" name="author" value="{{ old('author') }}" placeholder="Autor">
                        @if ($errors->has('author'))
                                <span class="text-danger">{{ $errors->first('author') }}</span>
                            @endif
                    </div>
                    <div class="col-md-12">
                        <label for="inputSubtitle" class="form-label">Subtítulo</label>
                        <input type="text" class="form-control" id="inputSubtitle" name="subtitle" value="{{ old('subtitle') }}" placeholder="Subtítulo">
                            @if ($errors->has('subtitle'))
                                <span class="text-danger">{{ $errors->first('subtitle') }}</span>
                            @endif
                    </div>
                    <div class="col-md-12">
                        <label for="inputEdition" class="form-label">Edição</label>
                        <input type="text" class="form-control" id="inputEdition" name="edition" value="{{ old('edition') }}" placeholder="Ex: 1a edição, 2a edição...">
                            @if ($errors->has('edition'))
                                <span class="text-danger">{{ $errors->first('edition') }}</span>
                            @endif
                    </div>
                    <div class="col-md-12">
                        <label for="inputEditor" class="form-label">Editora</label>
                        <input type="text" class="form-control" id="inputEditor" name="editor" value="{{ old('editor') }}" placeholder="Editora">
                            @if ($errors->has('editor'))
                                <span class="text-danger">{{ $errors->first('editor') }}</span>
                            @endif
                    </div>
                    <div class="col-md-12">
                        <label for="inputYear" class="form-label">Ano de publicação</label>
                        <input type="number" max="2099" step="1" class="form-control" id="inputYear" name="publish_date" value="{{ old('publish_year') }}">
                            @if ($errors->has('publish_year'))
                                <span class="text-danger">{{ $errors->first('publish_year') }}</span>
                            @endif
                    </div>
                    
                    
                    
                    <div class="col-12">
                        <input type="submit" class="btn btn-success" value="Cadastrar livro">
                    </div>
                </form>
            </div>
        </div>
    </div>    
</div>

@endsection