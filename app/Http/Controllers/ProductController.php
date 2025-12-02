<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public fucntion index() {
        $products = Product::all();
        return view('products.index',compact('products'))
    }

    public function search(Request $request) {
       $searchedItem -> $request->input('search') //gets the searched item from the entered form
           
       $product = Product::where('name','like',"%{$searchedItem}%")->get() //Search through the database to find similar products to the entered product

       return view ('products.index',compact('products'))  
    }

    public function show(Product $product) {
        return view('products.show',compact('product'))
    }
}
