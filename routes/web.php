<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use Illuminate\Routing\RouteUri;
use Termwind\Components\Hr;

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

route::get('/redirect', [HomeController::class,'redirect']);
route::get('/', [HomeController::class,'index']);
route::get('/home', [AdminController::class,'home']);
route::get('/product',[AdminController::class,'product']);
route::get('/allproducts',[AdminController::class,'allproducts']);
route::get('/order',[AdminController::class,'order']);
route::post('/addproduct',[AdminController::class, 'addproduct']);
route::get('/deleteproduct/{id}',[AdminController::class, 'deleteproduct']);
route::get('/updateproductview/{id}',[AdminController::class, 'updateproductview']);
route::post('/updateproduct/{id}',[AdminController::class, 'updateproduct']);
route::get('/productdetail/{id}',[HomeController::class, 'productdetail']);
route::get('/allproduct',[HomeController::class, 'allproduct']);
route::post('/addcart/{id}',[HomeController::class, 'addcart']);
route::get('/showcart',[HomeController::class, 'cart']);
route::get('/confirmorder',[HomeController::class, 'confirmorder']);
route::get('/orderconfirm/{id}',[AdminController::class, 'orderconfirm']);
route::get('/ordercancel/{id}',[AdminController::class, 'ordercancel']);
route::get('/orders',[HomeController::class, 'orders']);