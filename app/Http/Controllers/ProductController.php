<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function productList(){
        return view('product-list');
    }

    public function addProduct(){
        return view('add-product');
    }

    public function saveProduct(Request $request){
        // validating the form
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'image' => 'required',
        ]);
    }

    public function editProduct(){
        return view('edit-product');
    }

    public function updateProduct(Request $request){
        // validating the form
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'image' => 'required',
        ]);
    }
}
