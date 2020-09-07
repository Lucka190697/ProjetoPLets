<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
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
        // dd($this->method());
     $rules =  [
        'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'max:255', $this->method() == 'PUT' ? 'min:1' : 'unique:users'],
            'password' => ['required', 'string', 'min:3', 'max:255', 'confirmed'],
            'thumbnail' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048', 'min:1'],
            'phone' => ['string', 'min:8', 'max:15'],
        ];
        // dd($rules);
        //  'email' => [
            // 'required', 'email', Rule::unique((new User)->getTable())->ignore($this->route()->user->id ?? null)
        // ],
    return $rules;
    }
}
