<?php

namespace App\Repositories;

use Illuminate\Support\Facades\Hash;

// use Illuminate\Foundation\Http\FormRequest;

class BookRepository
{

    public function createProfile($data)
    {
        if(isset($data['thumbnail'])){
        request()->thumbnail->move(public_path('book/'),
                $data['title'] . '.' .
                $data['thumbnail']->getClientOriginalExtension());
        $data['thumbnail'] = $data['title'] . '.' .
        $data['thumbnail']->getClientOriginalExtension();
        }else
            $data['thumbnail'] = 'default.jpg';
        return $data;
    }

    public function editProfile($current, $data)
    {
        if((isset($current->thumbnail)) && (!isset($data['thumbnail']))){
            $data['thumbnail'] = $current->thumbnail;
            return $data;
        }
        else{
            return self::createProfile($data);
        }
    }

    public function dateTreatment($data)
    {
        $data['entryDate'] = date('Y-m-d H:i:s', strtotime($data['entryDate']));//2020-08-03 21:30:00
        return $data;
    }

}
