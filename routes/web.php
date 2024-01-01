<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\CaracteristiqueController;

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

Route::get('/', [HomeController::class, 'indexClient']);

Route::get('/category/{categorie}', [ProduitController::class, "indexClient"]);
Route::get('/product/{produit}', [ProduitController::class, "showProduct"])->name("product");

Auth::routes();


Route::prefix('/')
->middleware(['auth','isAdmin'])
->group(function () {
        Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
        Route::resource('admin/users', UserController::class);
        Route::resource('admin/caracteristiques', CaracteristiqueController::class);
        Route::resource('admin/produits', ProduitController::class);
        Route::resource('admin/commandes', CommandeController::class);
    });
