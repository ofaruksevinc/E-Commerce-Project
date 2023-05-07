<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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
route::get('/allproduct',[AdminController::class,'allproduct']);
route::get('/order',[AdminController::class,'order']);
route::post('/addproduct',[AdminController::class, 'addproduct']);
route::get('/deleteproduct/{id}',[AdminController::class, 'deleteproduct']);
route::get('/updateproductview/{id}',[AdminController::class, 'updateproductview']);
route::post('/updateproduct/{id}',[AdminController::class, 'updateproduct']);
