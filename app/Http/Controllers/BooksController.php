<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use App\Models\Book;
use App\Models\Loan;
use App\Repositories\BookRepository;
use Facade\FlareClient\Stacktrace\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    private $paginate = 15;

    public function index(Book $book)
    {
        $title = 'Books List';
        $books = Book::paginate($this->paginate);

        return view('books.index', compact('books', 'title'));
    }

    public function create()
    {
        $books = Book::all();
        $title = 'Insert new book';
        return view('books.create', compact('title', 'books'));
    }

    public function store(Book $model, BookRequest $request, BookRepository $repository)
    {
        $data = $request->validated();
        $createProfile = $repository->createProfile($data);
        $user_id = $repository->user_id($createProfile);
        $dateTreatment = $repository->dateTreatment($user_id);

        Book::create($user_id);

//        $model->create($user_id);

        $request->session()->flash('message', 'Book created!');

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

        $request->session()->flash('message', 'Book uptaded!');

        return redirect()->route('books.index');
    }

    public function show(Book $model, $id)
    {
        $title = 'Book details';
        $book = $model->find($id);

        return view('books.show', compact('title', 'book'));
    }

    public function destroy(Book $model, BookRequest $request, $id)
    {
        $current = $model->find($id);
        if (isset($current->thumbnail))
            unlink(public_path('book/') . $current->thumbnail);

        Book::destroy($id);

        $request->session()->flash('message', 'book deleted!');

        return redirect()->route('books.index');
    }

    public function search(Book $model, Request $request)
    {
        $title = 'Search';
        $data = $request->all();
        $books = $model->search($data);

        return view('books.index', compact('title', 'books'));
    }
}
