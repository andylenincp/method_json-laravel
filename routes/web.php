<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Models\Product;

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

Route::get('/products', [ProductController::class, 'index'], function() {
    return view('products');
});

Route::resource('/products', ProductController::class);

Route::get('/products-create', function() {
    return view('products-create');
});

Route::get('/products-update', function() {
    return view('products-update');
});

Route::get('products/{id}/destroy', [
    'uses' => 'App\\Http\\Controllers\\ProductController@destroy',
    'as' => 'products.destroy'
]);