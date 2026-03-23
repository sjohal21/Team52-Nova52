<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Reviews;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Gets all of the products from the database
        $products = Product::all();

        return view('products.index', compact('products'));
    }

    public function search(Request $request)
    {
        $query = Product::query();

        // Search by product name
        if ($request->filled('search')) {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        // Filter by category
        if ($request->filled('category')) {
            $category = Category::where('name', $request->category)->first();

            if ($category) {
                $query->where('category_id', $category->id);
            }
        }

        $products = $query->get();

        return view('products.index', compact('products'));
    }

    public function searchByCategory(string $categoryName)
    {
        $category = Category::where('name', $categoryName)->first();

        if (!$category) {
            return view('products.index', ['products' => collect()]);
        }

        $products = $category->products;

        return view('products.index', compact('products'));
    }

    public function showOne(Product $product)
    {
        return view('products.show', [
            'product' => $product,
            'reviews' => Reviews::where('product_id', $product->id)
        ]);
    }
}