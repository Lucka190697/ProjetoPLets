<?php

namespace App\Http\Requests;

use GuzzleHttp\Psr7\Request;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Routing\RouteUri;
use PHPUnit\Framework\MockObject\Rule\MethodName;

class LoanRequest extends FormRequest
{
    public function authorize()
    {
        return auth()->check();
    }

    public function rules()
    {
        $rules =  [
            'loans_date' => 'required|string|max:18|min:10',
            'return_date' => 'required|string|max:18|min:10',
//            'is_loan' => 'required',
//            'user_id' => 'required|integer|max:255|min:1',
            'book_id' => 'required|integer|max:255|min:1',
        ];

        return $rules;
    }
}
