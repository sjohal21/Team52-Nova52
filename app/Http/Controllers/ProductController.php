<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public fucntion index() {
        //Retrieves all the products from the database
        $products = Product::all();
        return view('products.index',compact('products'))
    }

    public function search(Request $request) {
        //Retrieves the search itemed from the form
       $searchedItem -> $request->input('search')

     //Search through the database to find similar products to the entered product
       $product = Product::where('name','like',"%{$searchedItem}%")->get() 

       return view ('products.index',compact('products'))  
    }

    public function show(Product $product) {
        //if the product is found show it, if not then display an error
        $product = Product::findorFail($id)

        return view('products.show',compact('product'))
    }
}
