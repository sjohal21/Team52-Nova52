<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
    //Gets all of the products from the database
        $products = Products::all()

        return view('products.index',compact('products'))
    }

    public function search() {
 
        //Make sure that the search isnt empty
       $request->validate([
        'search' => 'required|string|max:255'
       ])

        //Retrieve the entered item for the search
        $searchedItem = request->input('search')

        //Search for similar product to the product that is entered
        $products = Product::where('name','like',"$%{$searchedItem}%")->get()
        
        //if there are no products that match show a message
        if($products->isEmpty()) {
            return->redirect()->back()->with()->('message','No products that match your seatch found')
        }

        return view('products.index',compact('products'))
    }

    public function showOne(Product $product) {
        return view('products.show',compact('product'))
    }
}
