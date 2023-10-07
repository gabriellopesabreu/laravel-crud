<?php

namespace App\Http\Controllers;

use App\Http\Requests\Product\SaveRequest;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        return view(view: 'home');
    }

    public function products()
    {
        return view(view: 'products');
    }

    public function addproduct()
    {
        return view(view: 'addProduct');
    }

    public function save(
        SaveRequest $request
    ) {
        $products = Product::create(
            [
                'name' => $request->input(key: 'name'),
                'price' => $request->input(key: 'price'),
                'description' => $request->input(key: 'description'),
                'quantity' => $request->input(key: 'quantity'),
                'color' => $request->input(key: 'color'),
                'height' => $request->input(key: 'height'),
                'weight' => $request->input(key: 'weight'),
            ]
        );

        dd($products->all());
    }
}
