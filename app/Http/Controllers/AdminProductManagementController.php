<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminProductManagementController extends Controller
{
    public function index(Request $request) {

    //Find the product with the chosen category
        $query = Product::with('category');

        //Shows the products with the chosen category
        if ($request->filled('category_id')) {
            $query->where('category_id',$request->category_id);

        //gets the list of products and categories
        $products = $query->orderBy('name')->get();
        $categories = query->orderBy('name')->get();

        return view('admin.product.index',[
            'products' => $products,
            'categories' => $categories,
            'chosenCategory' => $request->category_id ?? null //if no product is chosen return null
        ]);
        }
    }
}
