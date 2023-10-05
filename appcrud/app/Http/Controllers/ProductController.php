<?php

namespace App\Http\Controllers;

use App\Http\Requests\Product\SaveRequest;
use Illuminate\Http\Request;

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
        Request $request
    ){
        $nome = $request->input('nome');
        $price = $request->input('price');

        dd($request->all());

    }
}
