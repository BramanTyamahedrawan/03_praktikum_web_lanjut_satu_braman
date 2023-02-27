<?php

namespace App\Http\Controllers;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            [
                'id' => 1,
                'name' => 'Jago C++',
                'category' => 'Teknik Informatika',
                'price' => 80000
            ],
            [
                'id' => 2,
                'name' => 'Framework Django',
                'category' => 'Teknik Informatika',
                'price' => 130000
            ],
            [
                'id' => 3,
                'name' => 'Jago Arduino',
                'category' => 'Teknik Elektro',
                'price' => 75000
            ]
        ];

        return view('product', compact('products'));
    }
}