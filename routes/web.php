<?php

use App\Http\Controllers\ProductosController;
use App\Http\Controllers\CartController;
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

// Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::get('/', function () {
         return view('index');
})->name('index');

Route::middleware(['auth:sanctum', 'verified'])->get('/cart/{product}', [CartController::class, "agregar_al_carrito"] )->name('agregar_al_carrito');

Route::get('/cart/{user}', [CartController::class, "index"])->name('user.cart');

Route::get('/category/{category}/remeras', [ProductosController::class, "index"])->name('productos.remeras');
Route::get('/category/{category}/buzos', [ProductosController::class, "index"])->name('productos.buzos');
Route::get('/category/{category}/pantalones', [ProductosController::class, "index"])->name('productos.pantalones');
Route::get('/category/{category}/zapatillas', [ProductosController::class, "index"])->name('productos.zapatillas');

Route::get('/{category}/{product}', [ProductosController::class, "show"])->name('productos.show');
