<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductManagementController extends Controller
{
    public function index()
    {
        return view('admin.products.manageproducts')->with(["products"=>Product::all()]);
    }

    public function editProductPage(int $id)
    {
        return view('admin.products.editProductPage')->with(["product"=>Product::where('id',$id)->first()]);
    }

    public function createProductPage()
    {
        return view('admin.products.addproduct')->with(["categories"=>Category::all()]);
    }
    public function createProduct(Request $request)
    {
        $product = new Product();
        $product->name = $request['productName'];
        $product->stock_level = $request['stockQuantity'];
        $product->description = $request['productDescription'];
        $product->price = $request['productPrice'];
        $product->category_id = $request['categoryID'];
        if($request['uploadedImage'] != null)
        {
            $product->photo_url = $request->file('uploadedImage')->store('images', 'public');
        }
        $product->save();
        return redirect('/admin/products');
    }

    public function modifyProduct(Request $request)
    {
        $product = Product::where('id', $request['productID'])->first();
        $product->name = $request['productName'];
        $product->stock_level = $request['stockQuantity'];
        $product->description = $request['productDescription'];
        $product->price = $request['productPrice'];
        if ($request['uploadedImage'] != null)
        {
            $product->photo_url = $request->file('uploadedImage')->store('images', 'public');
        }
        $product->save();
        return redirect('/admin/products');

    }

    public function deleteProduct(Request $request)
    {
        // TODO: add function to remove a product from the database
    }
}
