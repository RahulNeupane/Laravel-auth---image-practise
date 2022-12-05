<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function productList(){
        $data = Product::all();
        return view('product-list', compact('data'));
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

        $name = $request->name;
        $prodprice = $request->price;
        $proddesp = $request->description;
        $prodimage = $request->file('image')->getClientOriginalName();


        // move uploaded file here
        $request->image->move(public_path('images'), $prodimage);

        $product = new Product();
        $product->name = $name;
        $product->prodprice = $prodprice;
        $product->proddesp = $proddesp;
        $product->prodimage = $prodimage;

        $product->save();

        return redirect('/product-list')->with('success', 'New Product added successfully');

    }

    public function editProduct($id){
        $data = Product::where('id', '=', $id)->first();
        return view('edit-product', compact('data'));
    }

    public function updateProduct(Request $request){
        // validating the form
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'image' => 'required',
        ]);

        $id = $request->id;
        $name = $request->name;
        $prodprice = $request->price;
        $proddesp = $request->description;
        $prodimage = $request->file('image')->getClientOriginalName();

        // move uploaded file here
        $request->image->move(public_path('images'), $prodimage);

        Product::where('id', '=', $id)->update([
            'name' => $name,
            'prodprice' => $prodprice,
            'proddesp' => $proddesp,
            'prodimage' => $prodimage,
        ]);

        return redirect('/product-list')->with('success', 'Product Updated Successfully');
    }

    public function deleteProduct($id){
        Product::where('id', '=', $id)->delete();

        return redirect('/product-list')->with('success', 'Product Deleted Successfully');
    }
}
