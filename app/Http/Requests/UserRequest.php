<?php

namespace App\Http\Requests;

use GuzzleHttp\Psr7\Request;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Routing\RouteUri;
use PHPUnit\Framework\MockObject\Rule\MethodName;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
     $rules =  [
        'name' => 'required|string|max:255',
            'email' => 'required|string|max:255|unique:users,email',
            'password' => 'required|string|min:3|max:255|confirmed',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048|min:1',
            'phone' => 'string|min:3|max:15',
            'isadmin' => 'required|boolean',
        ];

        if($this->method() == 'PUT'){
            $rules['email'] .= ",{$this->user->id}";
        }

    return $rules;
    }
}
