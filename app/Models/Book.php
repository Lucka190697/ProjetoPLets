<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'isbn',
        'title',
        'author',
        'giver',
        'entryDate',
        'thumbnail',
        'user_id'
    ];

    public function loan()
    {
        return $this->hasOne(Loan::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function search($data)
    {
        $books = $this->where(function ($query) use ($data) {
            if (isset($data['search'])){
                $query->where('isbn', 'ilike', '%' . $data['search'] . '%')
                    ->orWhere('title', 'ilike', '%' . $data['search'] . '%')
                    ->orWhere('author', 'ilike', '%' . $data['search'] . '%')
                    ->orWhere('giver', 'ilike', '%' . $data['search'] . '%')
                    ->orWhere('entryDate', 'ilike', '%' . $data['search'] . '%')
                    ->orWhere('thumbnail', 'ilike', '%' . $data['search'] . '%')
                    ->get();
            }
        });
        return $books->get();
    }
}
