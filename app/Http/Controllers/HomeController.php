<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\product;
use App\Models\cart;
use App\Models\order;

class HomeController extends Controller
{
    public function redirect()
    {
        $usertype = Auth::user()->usertype;

        if ($usertype == '1') {
            return view('admin.home');
        } else {
            $data = product::paginate(4);
            $count = cart::where('phone', Auth::user()->phone)->count();
            return view('user.home', compact('data', 'count'));
        }
    }

    public function index()
    {
        if (Auth::id()) {
            return redirect('redirect');
        } else {
            $data = product::paginate(4);
            return view('user.home', compact('data'));
        }
    }
    public function productdetail($id)
    {
        $user = auth()->user();
        $product = product::find($id);
        $count = cart::where('phone', Auth::user()->phone)->count();
        return view('user.productDetails', compact('product','count'));
    }
    public function allproduct()
    {
        $data = product::all();
        return view('user.allproduct', compact('data'));
    }
    public function addcart(Request $request, $id)
    {
        if (Auth::id()) {
            $user = auth()->user();
            $product = product::find($id);
            $cart = new cart;
            $cart->name = $user->name;
            $cart->phone = $user->phone;
            $cart->address = $user->address;
            $cart->product_title = $product->title;
            $cart->price = $product->price * $request->quantity;
            $cart->quantity = $request->quantity;
            $cart->save();
            return redirect()->back()->with('message', 'Ürün Sepete Eklendi');;
        } else {
            return redirect('login');
        }
    }

    public function cart()
    {
        $user = auth()->user();
        $cart = cart::where('phone', $user->phone)->get();
        $count = cart::where('phone', $user->phone)->count();
        $total = 0;
        foreach ($cart as $price) {
            $total += $price->price;
        }
        return view('user.showcart', compact('count', 'cart', 'total'));
    }
    public function confirmorder(Request $request)
    {
        $user = auth()->user();
        $name = $user->name;
        $phone = $user->phone;
        $address = $user->address;
        foreach ($request->productname as $key => $productname) {
            $order = new order;
            $order->product_name = $request->productname[$key];
            $order->price = $request->price[$key];
            $order->quantity = $request->quantity[$key];
            $order->name = $name;
            $order->phone = $phone;
            $order->address = $address;
            $order->status = "Sipariş Alındı";
            $order->save();
        }
        DB::table('carts')->where('phone', $phone)->delete();
        return redirect()->back()->with('message', 'Sipraişiniz Alındı. İyi Günler Dileriz :)');
    }
    public function orders()
    {
        $user = auth()->user();
        $order = order::where('phone', $user->phone)->get();
        $cart = cart::where('phone', $user->phone)->get();
        $count = cart::where('phone', $user->phone)->count();
        $total = 0;
        foreach ($cart as $price) {
            $total += $price->price;
        }
        return view('user.orders', compact('order', 'count','total'));
    }
}
