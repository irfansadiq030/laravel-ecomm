<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/test',function(){
    return view('admin.dashboard');
});

Route::get('/add-product',function(){
    return view('admin.product-add');
});

Route::get('/view-products',function(){
    return view('admin.product-list');
});

Route::get('/main-category',function(){
    return view('admin.main-category');
});

Route::get('/sub-category',function(){
    return view('admin.sub-category');
});

Route::get('/view-orders',function(){
    return view('admin.new-orders');
});

Route::get('/order-detail',function(){
    return view('admin.order-detail');
});

Route::get('/customers',function(){
    return view('admin.customers');
});
