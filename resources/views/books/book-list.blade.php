@extends('layouts.app')
@section('title', 'Listagem de livros')

@section('content')


<div class="row justify-content-center mt-5">
    <div class="col-md-8">
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th>Título</th>
                    <th>Subtítulo</th>
                    <th>Autor</th>
                    <th>Editora</th>
                    <th>Edição</th>
                    <th>Ano de publicação</th>
                    <th>Cadastrado em</th>
                    <th>Atualizado em</th>
                    <th>Editar</th>
                    <th>Remover</th>

                </tr>
            </thead>
            <tbody>
                @if (count($books) > 1)
                
                    @foreach($books as $book)
                        <tr>
                            <td>{{ $book->title }}</td>
                            <td>{{ $book->subtitle }}</td>
                            <td>{{ $book->author }}</td>
                            <td>{{ $book->editor }}</td>
                            <td>{{ $book->edition }}</td>
                            <td>{{ $book->publish_date }}</td>
                            <td>{{ $book->created_at }}</td>
                            <td>{{ $book->updated_at }}</td>
                            <td>
                                <a class="btn btn-warning" href="{{ route('edit-book', $book) }}"><img id="editIcon" src="./src/img/editIcon.png" alt="Editar"></a>
                            </td>
                            <td>
                                <form action="/remover/{{ $book->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"><img id="removeIcon" src="./src/img/removeIcon.png" alt="Remover"></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="10">Sem livros por aqui.</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>

@endsection