<?php

namespace App\Http\Controllers;
use App\products;
use Illuminate\Http\Request;
use App\product;

class StoreController extends Controller
{
    public function  index()
    {
        $products = products::all();
        //dd($products);
         return view('store.index ',compact('products'));


    }


    public function show($slug) {
        $product = products::where('slug', $slug)->first();
        // dd($products);
        return view('store.show', compact('product'));
    }
}
