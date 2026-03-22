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

    public function createProductPage(Request $request) {

         $categories = Category::orderBy('name')->get();
         return view('admin.products.create',[
            'categories' => $categories
            ]);
    }

    public function createProduct(Request $request) {

    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'category_id' => 'required|exists:categories,id',
        'stock_level' => 'nullable|integer|min:0',
        'description' => 'nullable|string',
        'price' => 'required|numeric|min:0',
        'photo' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
    ]);

    photoURL = null;
    if ($request->hasFile('photo')){
        $photoURL = $request->file('photo')->store('products','public');
    }
    
    Product::create([
        'name' => $validated['name'],
        'category_id' => $validated['category_id'],
        'stock_level' => $validated['stock_level'] ?? 0,
        'description' => $validated['description'] ?? null,
        'price' => $validated['price'],
        'photo_url' => $photoURL
    ]);

    return redirect()->to('/admin/products')->with('success','Product successfully created');

    }

    public function editProductPage($id) {

        $product = Product::findorFail($id)
        $categories = Category::orderBy('name')->get();

        return view('admin.products.edit',[
            'product' => $product,
            'categories' => $categories,
        ]);
    }

    public function modifyProduct(Request $request) {
         $validated = $request->validate([
        'id' => 'required|exists:products,id',
        'name' => 'required|string|max:255',
        'category_id' => 'required|exists:categories,id',
        'stock_level' => 'nullable|integer|min:0',
        'description' => 'nullable|string',
        'price' => 'required|numeric|min:0',
        'photo' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
         ]);

         $product = findOrFail($validated['id']);

        if ($request->hasFile('photo') ){
        $photoURL = $request->file('photo')->store('products','public');
    }

     $product->name = $validated['name'];
     $product->category_id = $validated['category_id'];
     $product->stock_level = $validated['stock_level'] ?? 0;
     $product->description = $validated['description'] ?? null;
     $product->price = $validated['price'];
     $product->save();

     return redirect()->to('/admin/products')->with('success','Product successfully updated.');
    }

    public function deleteProduct(Request $request) {

    $validated = $request->validate([
        'id' => 'required|exists:products,id',
    ]);

    $product = Product::findOrFail($validated['id']);
    $product->delete();

    return redirect()->to('/admin/products')->with('success','Product successfully deleted');
    }
     
    
    }
}
