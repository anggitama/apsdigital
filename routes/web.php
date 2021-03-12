<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\OrderController;

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

// Route::get('/', function () {
//     return view('layout/main');
// });

// ------- Admin ------- //
// Produk
Route::get('/', [ProdukController::class, 'index']);
Route::get('/produk/detail/{id_produk}', [ProdukController::class, 'detail']);
Route::get('/produk/add/', [ProdukController::class, 'add']);
Route::post('/produk/insert/', [ProdukController::class, 'insert']);
Route::get('/produk/edit/{id_produk}', [ProdukController::class, 'edit']);
Route::post('/produk/update/{id_produk}', [ProdukController::class, 'update']);
Route::get('/produk/delete/{id_produk}', [ProdukController::class, 'delete']);

// Order
Route::get('/order', [OrderController::class, 'index']);
Route::get('/order/detail/{id_produk}', [OrderController::class, 'detail']);
Route::get('/order/add/', [OrderController::class, 'add']);
Route::post('/order/insert/', [OrderController::class, 'insert']);
Route::get('/order/edit/{id_produk}', [OrderController::class, 'edit']);
Route::post('/order/update/{id_produk}', [OrderController::class, 'update']);
Route::get('/order/delete/{id_produk}', [OrderController::class, 'delete']);
Route::get('/order/exportData/', [OrderController::class, 'exportData']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('logout', function ()
{
    auth()->logout();
    Session()->flush();
    return Redirect::to('/');
})->name('logout');