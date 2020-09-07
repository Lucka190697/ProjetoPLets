<?php

namespace App\Repositories;

use Illuminate\Support\Facades\Hash;

// use Illuminate\Foundation\Http\FormRequest;

class UserRepository
{

    public function createProfile($data)
    {
        if($data['thumbnail']){
        request()->thumbnail->move(public_path('users/'),
                $data['name'] . '.' .
                $data['thumbnail']->getClientOriginalExtension());

        $data['thumbnail'] = $data['name'] . '.' .
        $data['thumbnail']->getClientOriginalExtension();
        }else
        $data['thumbnail'] = 'default.jpg';
        return $data;
    }

    public function createHash($data)
    {
        if(isset($data['password']))
        $data['password'] = Hash::make($data['password']);

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
}
