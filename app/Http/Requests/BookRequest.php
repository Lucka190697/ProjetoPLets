<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
        // dd('request');
        $rules =  [
            'isbn' => ['required', 'string', 'max:255', 'min:13', $this->method() == 'PUT' ? 'sometimes' : 'unique:books'],
            'title' => ['required', 'string', 'max:255', 'min:1'],
            'author' => ['required', 'string', 'max:255', 'min:1'],
            'giver' => ['required', 'string', 'max:15', 'min:1'],
            'entryDate' => ['required', 'string', 'max:15', 'min:1'],
            'thumbnail' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048', 'min:1'],
            ];
            // dd($rules);

        return $rules;
    }
}
