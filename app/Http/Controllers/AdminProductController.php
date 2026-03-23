<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;


class AdminProductController extends Controller {

    // Admin Edit Product Page Route
    //public function editProductPage() {
    //  return view('admin.products.editProductPage');
    //    }

    // Admin Add Product Page Route
    public function addProductPage() {
        return view('admin.products.addproduct');
    }

    //Edit Produt Function
    public function editProductPage($id) {
        $product = Product::findOrFail($id);
        $categories = Category::all();
        return view('admin.products.editProductPage', compact('product', 'categories'));
    }

}