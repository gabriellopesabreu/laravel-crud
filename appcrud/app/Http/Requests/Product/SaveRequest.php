<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class SaveRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'price' => 'required|decimal:2',
            'description' => 'required|string',
            'color' => 'string',
            'quantity' => 'required|integer',
            'height' => 'required|decimal:1,2',
            'weight' => 'required|decimal:1,2',
        ];
    }
}
