<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminProductController extends Controller {

    // Admin Edit Product Page Route
    public function editProductPage() {
        return view('admin.products.editProductPage');
    }

}