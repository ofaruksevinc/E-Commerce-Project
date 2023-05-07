<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class AdminController extends Controller
{
    public function home()
    {
        return view('admin.home');
    }
    public function product()
    {
        return view('admin.product');
    }
    public function allproduct()
    {
        $products = Product::all();

        return view('admin.updateview', compact('products'));
    }

    public function order()
    {
        return view('admin.order');
    }
    public function addproduct(Request $request)
    {
        $data = new product;
        $image = $request->image;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('productimage', $imagename);
        $data->image = $imagename;
        $data->title = $request->title;
        $data->price = $request->price;
        $data->description = $request->description;
        $data->quantity = $request->quantity;
        $data->save();

        return redirect()->back()->with('message', 'Ürün Eklendi.');
    }

    public function deleteproduct($id)
    {
        $data = Product::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Ürün Silindi.');
    }
    public function updateproductview($id){
        $data = Product::find($id);
        return view('admin.updateProduct', compact('data'));
    }
    public function updateproduct(Request $request,$id)
    {
        $data = Product::find($id);
        $image = $request->image;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('productimage', $imagename);
        $data->image = $imagename;
        $data->title = $request->title;
        $data->price = $request->price;
        $data->description = $request->description;
        $data->quantity = $request->quantity;
        $data->save();
        
        return view('admin.updateProduct', compact('data'));
    }
}
