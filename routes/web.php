<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*Ruta de la pagina principal, cuando el usuario NO esta logeado*/
Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

/*Ruta de la pagina producto, cuando el usuario NO esta logeado*/
Route::get('/welcomeProduct', function () {
    return view('welcomeProduct');
})->name('welcomeProduct');

/*Ruta de la pagina tienda, cuando el usuario NO esta logeado*/
Route::get('/welcomeShop', function () {
    return view('welcomeShop');
})->name('welcomeShop');

/*Ruta de la pagina servicio al cliente, cuando el usuario NO esta logeado*/
Route::get('/welcomeService', function () {
    return view('welcomeService');
})->name('welcomeService');

/*
|--------------------------------------------------------------------------
| Web Routes cuando el usuario SI esta loguedo
|--------------------------------------------------------------------------
|
*/

/*Ruta de la pagina producto, cuando el usuario SI esta logeado*/
Route::get('/product_client', function () {
    return view('product_client');
})->name('product_client');

/*Ruta de la pagina compra, cuando el usuario SI esta logeado*/
Route::get('/shop', function () {
    return view('shop');
})->name('shop');

/*Ruta de la pagina servicio al cliente, cuando el usuario SI esta logeado*/
Route::get('/client_service', function () {
    return view('client_service');
})->name('client_service');


/*Ruta del carrito de compras */
Route::get('/shop', [CartController::class, 'shop'])->name('shop');
Route::get('/cart', [CartController::class, 'cart'])->name('cart.index');
Route::post('/add', [CartController::class, 'add'])->name('cart.store');
Route::post('/update', [CartController::class, 'update'])->name('cart.update');
Route::post('/remove', [CartController::class, 'remove'])->name('cart.remove');
Route::post('/clear', [CartController::class, 'clear'])->name('cart.clear');

/*Ruta de la pagina principal de redireccion cuando esta el usuario autentificado*/
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/dashboard/admin', [AdminController::class, 'index'])
    ->middleware(['auth', 'auth.admin'])
    ->name('admin.index');

require __DIR__.'/auth.php';
