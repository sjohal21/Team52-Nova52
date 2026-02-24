<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
    //Gets all of the products from the database
        $products = Product::all();

        return view('products.index',compact('products'));
    }

    public function search(Request $request) {

        //Make sure that the search isnt empty
       $request->validate([
        'search' => 'nullable|string|max:255',
        'category_id' => 'nullable|integer',
        'min_price' => 'nullable|numeric|min:0',
        'max_price' => 'nullable|numeric|min:0',
        'sort' => 'nullable|in:price_asc,price_desc',
       ]);

        //Retrieve the entered item for the search
        $searchedItem = trim((string) $request->input('search',''));
        $category_Id = $request->input('category_id');
        $minPrice = $request->input('min_price');
        $maxPrice = $request->input('max_price');
        $sort = $request->input('sort');

        if($minPrice !== null && $maxPrice !== null && $minPrice > $maxPrice) {
            return redirect()->back->with('message','max price must be greater than min price');
        }

        $query = Product::query();

        //shows products that have similar words to what is searched
        if($searchedItem !== '') {
            $query->where('name','like',"%{$searchedItem}%")->get();
        }
        
        //shows products with the category id selected
        if(!empty($category_Id)) {
            $query->where('category_id',$category_Id);
        }

        //checks that a minimum price was entered and shows products greater than or equal to that value
        if($minPrice !== null && $minPrice= '') {
            $query->where('price','>=',$minPrice);
        }

        //checks that a maximu, price was entered and shows products less than or equal to that value
        if($maxPrice !== null && $maxPrice = '') {
            $query->where('price','<=',$maxPrice);
        }
        
        //displays price in ascending or descending order depending on which one is chosen
        if ($sort === 'price_asc') {
            $query->orderBy('price','asc');
        }elseif ($sort === 'price_desc') {
            $query->orderBy('price','desc');
        }

        $products = $query->get();

        //if there are no products that match show a message
        if($products->isEmpty()) {
            return redirect()->back()->with('message','No products that match your search found!!');
        }

        return view('products.index',compact('products'));
    }

    public function showOne(Product $product) {
        return view('products.show',compact('product'));
    }
}
