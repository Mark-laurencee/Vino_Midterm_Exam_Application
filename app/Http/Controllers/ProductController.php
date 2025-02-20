<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productMethod()
    {
        $products = [
            ["name" => "Demon Slayer", "genre" => "Demon"], 
            ["name" => "Blue Lock", "genre" => "Sports"], 
            ["name" => "Power Rangers", "genre" => "Action"], 
            ["name" => "Akame ga Kill", "genre" => "Action"], 
            ["name" => "One Piece", "genre" => "Adventure"],
        ];

        return view('product', compact('products'));
    }
}
