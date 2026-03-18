<?php

namespace App\Http\Controllers;

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
        // TODO: ADD LOG
        return view('admin.products.editProductPage')->with(["product"=>Product::where('id',$id)->first()]);
    }

    public function createProductPage()
    {
        return view('admin.products.addproduct');
    }
    public function createProduct(Request $request)
    {
        // TODO: add function to add a product to the database
        
        /* Uncomment when finished. Last line before return
        Adminlog::create([
            'user_id' => auth() -> user() -> id,
            'action' => $product->name . " was created"
        ]);
        */


    }

    public function modifyProduct(Request $request)
    {
        $product = Product::where('id',$request['productID'])->first();
        $product->name = $request['productName'];
        $product->stock_level = $request['stockQuantity'];
        $product->description = $request['productDescription'];
        $product->price = $request['productPrice'];
        $product->photo_url = $request->file('uploadedImage')->store('images', 'public');
        $product->save();

        Adminlog::create([
            'user_id' => auth() -> user() -> id,
            'action' => $product->name . " was modified"
        ]);
        return redirect('/admin/products');
    }

    public function deleteProduct(Request $request)
    {
        // TODO: add function to remove a product from the database

        /* Uncomment when finished. Must be before item deletion line return statement
        Adminlog::create([
            'user_id' => auth() -> user() -> id,
            'action' => $product->name . " was deleted"
        ]);
        */

    }
}
