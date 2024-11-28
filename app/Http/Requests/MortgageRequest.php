<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MortgageRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'percent' => 'required|integer|max:40',
            'description' => 'nullable|string|max:1000',
            'min_first_payment' => 'required|integer|lte:max_price',
            'max_price' => 'required|numeric',
            'min_price' => 'required|numeric|lte:max_price',
            'min_term' => 'required|integer|max:500',
            'max_term' => 'required|integer',
        ];
    }
}
