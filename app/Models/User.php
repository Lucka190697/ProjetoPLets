<?php

namespace App;

use App\Models\Book;
use App\Models\Loan;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable, HasRoles;

    protected $fillable = [
        'name', 'email', 'password', 'thumbnail', 'phone', 'isadmin'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function loans()
    {
        return $this->hasMany(Loan::class);
    }

    public function books()
    {
        return $this->hasMany(Book::class);
    }

    public function search($data)
    {
        $users = $this->where(function ($query) use ($data) {
            if (isset($data['search'])){
                $query->where('name', 'ilike', '%' . $data['search'] . '%')
                    ->orWhere('email', 'ilike', '%' . $data['search'] . '%')
                    ->orWhere('phone', 'ilike', '%' . $data['search'] . '%')
                    ->orWhere('thumbnail', 'ilike', '%' . $data['search'] . '%')
                    ->get();
            }
        });
        return $users->get();
    }
}
