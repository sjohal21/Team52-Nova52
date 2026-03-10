<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductManagementController extends Controller
{
    public function index()
    {
        return view('admin.products.manageproducts');
    }

    public function createProduct(Request $request)
    {
        // TODO: add function to add a product to the database
    }

    public function modifyProduct(Request $request)
    {
        // TODO: add function to change an already existing product
    }

    public function deleteProduct(Request $request)
    {
        // TODO: add function to remove a product from the database
    }
}
