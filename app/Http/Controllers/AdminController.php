<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function home(){
        return view('admin.home');
    }
    public function product(){
        return view('admin.product');
    }
    public function updateproduct(){
        return view('admin.updateview');
    }
    public function order(){
        return view('admin.order');
    }
}
