<?php

namespace App\Repositories;

use App\Models\Book;

class LoanRepository
{
    public function dateTreatment($data)
    {
        $data['loans_date'] = date('Y-m-d H:i:s', strtotime($data['loans_date']));//2020-08-03 21:30:00
        $data['return_date'] = date('Y-m-d H:i:s', strtotime($data['return_date']));//2020-08-03 21:30:00
        return $data;
    }

    public function userLoan($data)
    {
        $data['user_id'] = auth()->user()->id;
        return $data;
    }

    public function book_idTreatment($data)
    {
        $data['book_id'] = (int)$data['book_id'];
        return $data;
    }
}
