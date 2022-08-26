<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use APP\Http\Controllers\BoutiqueController;
use APP\Http\Controllers\AdmiController;
use APP\Http\Controllers\ClientController;
use APP\Http\Controllers\Type_boutiqeController;
use APP\Http\Controllers\CategoryController;

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
// Route::get('/', function () {
//     return view('layouts.index');
// });


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/Type_boutiqe', [App\Http\Controllers\Type_boutiqeController::class, 'create'])->name('type.create');
Route::post('/Type_boutiqe-create', [App\Http\Controllers\Type_boutiqeController::class, 'store'])->name('type.store');
Route::get('/Boutique/create', [App\Http\Controllers\BoutiqueController::class, 'create'])->name('Boutique.create');
Route::post('/Boutique-create', [App\Http\Controllers\BoutiqueController::class, 'store'])->name('boutique.store');
Route::get('/Admin', [App\Http\Controllers\AdminController::class, 'create'])->name('admin.create');
Route::post('/Admin-create', [App\Http\Controllers\AdminController::class, 'store'])->name('admin.store');
Route::get('/Client', [App\Http\Controllers\ClientController::class, 'create'])->name('client.create');
Route::post('/Client-create', [App\Http\Controllers\ClientController::class, 'store'])->name('client.store');
Route::get('/Category', [App\Http\Controllers\CategoryController::class, 'create'])->name('categorie.create');
Route::post('/Category-create', [App\Http\Controllers\CategoryController::class, 'store'])->name('categorie.store');
Route::get('/Produit', [App\Http\Controllers\ProduitController::class, 'create'])->name('produit.create');
Route::post('/Produit-create', [App\Http\Controllers\ProduitController::class, 'store'])->name('produit.store');
Route::get('/Boutique', [App\Http\Controllers\BoutiqueController::class, 'create'])->name('boutiques.boutiqueRegistre');
Route::get('/Boutique/index', [App\Http\Controllers\BoutiqueController::class, 'index'])->name('Boutique.index');
Route::get('/Boutique/{id}', [App\Http\Controllers\BoutiqueController::class, 'edit'])->name('Boutique.edit');
Route::get('/Boutique/{{boutiques}}', [App\Http\Controllers\BoutiqueController::class, 'show'])->name('Boutique.show');
Route::get('/Boutique/{{id}}', [App\Http\Controllers\BoutiqueController::class, 'destroy'])->name('Boutique.destroy');

