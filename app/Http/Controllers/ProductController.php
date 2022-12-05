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

    public function editProduct(){
        return view('edit-product');
    }
}
