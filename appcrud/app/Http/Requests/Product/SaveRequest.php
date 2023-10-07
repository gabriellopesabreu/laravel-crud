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
            'description' => 'string',
            'color' => 'string',
            'quantity' => 'required|integer',
            'height' => 'decimal:1,2',
            'weight' => 'decimal:1,2',
        ];
    }
}
