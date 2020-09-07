<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use App\Models\Book;
use App\Repositories\BookRepository;
use Facade\FlareClient\Stacktrace\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    private $paginate;

    public function index(Book $book)
    {
        $title = 'Books List';
        $books = Book::paginate($this->paginate);

        return view('books.index', compact('books', 'title'));
    }

    public function create()
    {
        $title = 'Insert new book';
        return view('books.create', compact('title'));
    }

    public function store(Book $model, BookRequest $request, BookRepository $repository)
    {
        $data = $request->all();
        $data = $repository->createProfile($data);
        $book = $repository->dateTreatment($data);
        $model->create($book);

        return redirect()->route('books.index');
    }

    public function edit(Book $model, $id)
    {
        $title = 'Edit this book';
        $book = $model->find($id);
        return view('books.edit', compact('title', 'book'));
    }

    public function update(Book $model, BookRepository $repository, BookRequest $request, $id)
    {
        $data = $request->validated();
        $current = $model->find($id);
        $data = $repository->editProfile($current, $data);
        $book = $repository->dateTreatment($data);
        $current->update($book);

        $request->session()->flash('alert-success', 'Livro cadastrado eh isso!!', 'alert-danger', 'Oops! não foi possível cadastrar!');

        return redirect()->route('books.index');
    }

    public function show(Book $model, $id)
    {
        $title = 'Book details';
        $book = $model->find($id);

        return view('books.show', compact('title', 'book'));
    }

    public function destroy(Book $model, $id)
    {
        $current = $model->find($id);
        dd($current);
        if(isset($current->thumbnail))
            unlink(public_path('book/') . $current->thumbnail);

        Book::destroy($id);

        return redirect()->route('books.index');
    }
}
