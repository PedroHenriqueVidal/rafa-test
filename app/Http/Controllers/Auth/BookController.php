<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    public function register_book()
    {
        return view('books.register-book');
    }

    public function store_book(Request $request): RedirectResponse
    {
        $request->validate([
            'title' => 'required|string|max:250',
            'subtitle' => 'required|string|max:250',
            'author' => 'required|string|max:250',
            'editor' => 'required|string|max:250',
            'edition' => 'required|string|max:250',
            'publish_date' => 'required'
        ]);

        Book::create([
            'user_id' => Auth::user()->id,
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'author' => $request->author,
            'editor' => $request->editor,
            'edition' => $request->edition,
            'publish_date' => $request->publish_date
        ]);

        return redirect()->route('list-book')
        ->withSuccess('Livro cadastrado!');
    }

    public function list_book(){
        return view ('books.book-list', [
            'books' => Book::where('user_id', Auth::user()->id)->paginate(15)
        ]);
    }

    public function edit_book(Book $book){
        return view ('books.edit-book', ['book' => $book]);
    }

    public function remove_book($book){
            Book::findOrFail($book)->delete();
            return redirect('/lista-livro')->with('msg', 'Livro removido com sucesso!');
    }
}
