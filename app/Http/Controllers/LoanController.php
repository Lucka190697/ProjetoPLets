<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoanRequest;
use App\Models\Book;
use App\Models\Loan;
use App\Repositories\LoanRepository;
use Illuminate\Http\Request;

class LoanController extends Controller
{
    private $paginate = 15;

    public function index()
    {
        $title = 'Loan records';
        if (auth()->user()->isadmin == true) {
            $loans = Loan::paginate($this->paginate);
            return view('loans.index', compact('loans', 'title'));
        } else
            return redirect()->back();
    }

    public function create()
    {
        $title = 'New loan record';
        $books = Book::whereHas('loan', function ($query) {
            $query->whereNull('loans_date');
        })->get();
//        $books = Book::all();
//        dd($books);
        return view('loans.create', compact('title', 'books'));
    }

    public function store(LoanRequest $request, LoanRepository $repository)
    {
        $data = $request->validated();
        $data = $repository->dateTreatment($data);
        $data = $repository->userLoan($data);
        $data['is_loan'] = true;

        $loan = Loan::create($data);

        $request->session()->flash('message', 'Book created!');

        return redirect()->route('loans.index');
    }

    public function edit($id)
    {
        $title = 'Edit loan controller';
        $loan = Loan::find($id);
        return view('loans.edit', compact('title', 'loan'));
    }

    public function update(LoanRequest $request, LoanRepository $repository, Loan $model, $id)
    {
        $data = $request->validated();
        $current = $model->find($id);
        $dateTreatment = $repository->dateTreatment($data);
        $userLoan = $repository->userLoan($dateTreatment);
        $book_idTreatment = $repository->book_idTreatment($userLoan);

        $current->update($book_idTreatment);

        return redirect()->route('loans.index');
    }

    public function destroy($id)
    {
        if (auth()->user()->isadmin == true) {
//        $current = Loan::find($id);
            Loan::destroy($id);
            return redirect()->route('loans.index');
        } else
            return redirect()->back();
    }

    public function search(Request $request, Loan $model)
    {
        $title = 'Search';
        $data = $request->all();
        $loans = $model->search($data);

        return view('loans.index', compact('title', 'loans'));
    }
}
