<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
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

Route::get('/', [ClientController::class, 'accueil']);
Route::get('/categories', [ClientController::class, 'categories']);
Route::get('/produits', [ClientController::class, 'produits']);
Route::get('/contact', [ClientController::class, 'contact']);
Route::get('/panier', [ClientController::class, 'panier']);
Route::get('/login', [ClientController::class, 'login']);

// Route Admin
Route::get('/dashboard', [AdminController::class, 'dashboard']);






// Route::get('/', function () {
//     return view('client.accueil');
// });
// Route::get('/categories', function () {
//     return view('client.categories');
// });
// Route::get('/produits', function () {
//     return view('client.produits');
// });
// Route::get('/contact', function () {
//     return view('client.contact');
// });
// Route::get('/panier', function () {
//     return view('client.panier');
// });
// Route::get('/login', function () {
//     return view('client.login');
// });
