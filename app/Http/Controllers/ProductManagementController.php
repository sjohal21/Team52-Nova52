<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\AdminLog;
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
        Adminlog::create([
            'user_id' => auth() -> user() -> id,
            'action' => $product->name . " was created"
        ]);
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

        Adminlog::create([
            'user_id' => auth() -> user() -> id,
            'action' => $product->name . " was modified"
        ]);
        return redirect('/admin/products');

    }

    public function deleteProduct(Request $request)
    {
        $validated = $request->validate(['productID'=>'required|exists:products,id']);
        if($validated['productID'] != null)
        {
            $product = Product::where('id', $validated['productID'])->first();
            Adminlog::create([
                'user_id' => auth() -> user() -> id,
                'action' => $product->name . " was deleted"
            ]);
            $product->delete();
            return redirect('/admin/products')->with('success','Product deleted');
        }
        else
        {
            return redirect('/admin/products')->with('error','Product not found');
        }

    }
}
