<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    protected $fillable = [
        'loans_date',
        'return_date',
        'is_loan',
        'user_id',
        'book_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function books()
    {
        return $this->belongsTo(Book::class);
    }

    public function search($data)
    {
        $users = $this->where(function ($query) use ($data) {
            if (isset($data['search'])){
                $query->where('loans_date', 'ilike', '%' . $data['search'] . '%')
                    ->orWhere('return_date', 'ilike', '%' . $data['search'] . '%')
                    ->orWhere('is_loan', 'ilike', '%' . $data['search'] . '%')
                    ->orWhere('user_id', 'ilike', '%' . $data['search'] . '%')
                    ->orWhere('book_id', 'ilike', '%' . $data['search'] . '%')
                    ->get();
            }
        });
        return $users->get();
    }
}
