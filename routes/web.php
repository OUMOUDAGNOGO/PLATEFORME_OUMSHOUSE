<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BoutiqueController;

use APP\Http\Controllers\AdmiController;
use APP\Http\Controllers\ClientController;
use APP\Http\Controllers\Type_boutiqeController;
use APP\Http\Controllers\CategoryController;
use APP\Http\Controllers\ProduitController;

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
  
/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:client'])->group(function () {
  
     Route::get('/home', [HomeController::class, 'index'])->name('home');
});
  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:Administrateurs'])->group(function () {
  
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
});
  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:boutique'])->group(function () {
  
    Route::get('/boutiquier/home1', [HomeController::class, 'boutiquierHome'])->name('boutiquier.home');
});

Route::middleware(['auth', 'user-access:Clients'])->group(function () {
  
    Route::get('/client/dashclient', [HomeController::class, 'ClientHome'])->name('client.dashclient');
});






Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/Type_boutiqe', [App\Http\Controllers\Type_boutiqeController::class, 'create'])->name('type.create');
Route::post('/Type_boutiqe-create', [App\Http\Controllers\Type_boutiqeController::class, 'store'])->name('type.store');
Route::get('/Boutique/create', [App\Http\Controllers\BoutiqueController::class, 'create'])->name('Boutique.create');
Route::post('/Boutique-create', [App\Http\Controllers\BoutiqueController::class, 'store'])->name('boutique.store');
Route::get('/Admin', [App\Http\Controllers\AdminController::class, 'create'])->name('admin.create');
Route::post('/Admin-create', [App\Http\Controllers\AdminController::class, 'store'])->name('admin.store');
Route::get('/Client', [App\Http\Controllers\ClientController::class, 'create'])->name('client.create');

// categorie route
Route::get('/Category/create', [App\Http\Controllers\CategoryController::class, 'create'])->name('categorie.create');
Route::get('/Category/{id}', [App\Http\Controllers\CategoryController::class, 'edit'])->name('categorie.edit');
Route::get('/Category/{{id}}', [App\Http\Controllers\CategoryController::class, 'show'])->name('categorie.show');
Route::get('/Category/{{id}}', [App\Http\Controllers\CategoryController::class, 'destroy'])->name('categorie.destroy');
Route::get('/Category', [App\Http\Controllers\CategoryController::class, 'index'])->name('categorie.index');
 Route::post('/Category-create', [App\Http\Controllers\CategoryController::class, 'store'])->name('categorie/store');
// endcategorie

// Route::get('/master', [App\Http\Controllers\MasterController::class, 'index'])->name('master');

// produit route

Route::get('/Produit/create', [App\Http\Controllers\ProduitController::class, 'create'])->name('produit.produitRegistre');
Route::get('/Produit', [App\Http\Controllers\ProduitController::class, 'index'])->name('Produit.index');
Route::get('/Produit/edit', [App\Http\Controllers\ProduitController::class, 'edit'])->name('produit/edit');
Route::get('/Produit/show', [App\Http\Controllers\ProduitController::class, 'show'])->name('Produit.show');
Route::get('/Produit/{id}', [App\Http\Controllers\ProduitController::class, 'destroy'])->name('Produit.destroy');
Route::post('/Produit-create', [App\Http\Controllers\ProduitController::class, 'store'])->name('produit.store');
// produit route

// boutique route

Route::get('/Boutique', [App\Http\Controllers\BoutiqueController::class, 'create'])->name('Boutique.boutiqueRegistre');
Route::get('/Boutique/index', [App\Http\Controllers\BoutiqueController::class, 'index'])->name('Boutique.index');
Route::get('/Boutique/edit', [App\Http\Controllers\BoutiqueController::class, 'edit'])->name('Boutique.edit');
Route::get('/Boutique/show', [App\Http\Controllers\BoutiqueController::class, 'show'])->name('Boutique.show');
Route::post('/Boutique-create', [App\Http\Controllers\BoutiqueController::class, 'store'])->name('Boutique.store');
Route::get('/Boutique/destroy', [App\Http\Controllers\BoutiqueController::class, 'destroy'])->name('Boutique.destroy');


// Route::get('/Boutique/{id}', [App\Http\Controllers\BoutiqueController::class, 'store'])->name('Boutique.store');
// endboutique route

// route client
Route::get('/Client', [App\Http\Controllers\ClientController::class, 'index'])->name('client.index');
Route::get('/Client', [App\Http\Controllers\ClientController::class, 'create'])->name('client.clientRegistre');
Route::post('/Client-create', [App\Http\Controllers\ClientController::class, 'store'])->name('client.store');




