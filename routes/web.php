<?php

//use Carbon\Factory;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;
use App\Models\Product;
use App\Models\Livraison;

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


Route::get('/l', function () {
    return view('layouts.admin');
});
// Route::get('/v', function () {
//     return view('FrendEnd.home');
// });



Auth::routes();
//Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
Route::middleware(['auth', 'isAdmin'])->group(function () {
    //product
    Route::get('/product', [App\Http\Controllers\ProductController::class, 'index'])->name('product');
    Route::get('/product/create', [App\Http\Controllers\ProductController::class, 'create'])->name('product.create');
    Route::post('/product/store', [App\Http\Controllers\ProductController::class, 'store'])->name('product.store');
    Route::get('/product/edit/{id}', [App\Http\Controllers\ProductController::class, 'edit'])->name('product.edit');
    Route::post('/product/update/{id}', [App\Http\Controllers\ProductController::class, 'update'])->name('product.update');
    Route::delete('/product/delete/{id}', [App\Http\Controllers\ProductController::class, 'delete'])->name('product.delete');
    //Category
    Route::get('/Category', [App\Http\Controllers\CategoryController::class, 'index'])->name('Category');
    Route::get('/Category/create', [App\Http\Controllers\CategoryController::class, 'create'])->name('Category.create');
    Route::post('/Category/store', [App\Http\Controllers\CategoryController::class, 'store'])->name('Category.store');
    Route::get('/Category/edit/{id}', [App\Http\Controllers\CategoryController::class, 'edit'])->name('Category.edit');
    Route::post('/Category/update/{id}', [App\Http\Controllers\CategoryController::class, 'update'])->name('Category.update');
    Route::delete('/Category/delete/{id}', [App\Http\Controllers\CategoryController::class, 'delete'])->name('Category.delete');
    //user
    Route::get('/showUser', [App\Http\Controllers\DashOrdreController::class, 'showUser'])->name('user');
    Route::get('/createUser', [App\Http\Controllers\DashOrdreController::class, 'createUser']);
    Route::post('/storeUser', [App\Http\Controllers\DashOrdreController::class, 'storeUser'])->name('user.store');
    Route::delete('/deleteUser/{id}', [App\Http\Controllers\DashOrdreController::class, 'deleteUser'])->name('user.delete');
    Route::get('/editUser{id}', [App\Http\Controllers\DashOrdreController::class, 'editUser'])->name('user.edit');
    Route::post('/updateUser/{id}', [App\Http\Controllers\DashOrdreController::class, 'updateUser'])->name('user.update');
    //ordre
    Route::get('/myOrders', [App\Http\Controllers\DashOrdreController::class, 'myOrders']);
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//product

//Route::get('/search', [App\Http\Controllers\ProductController::class, 'search']);
Route::get('/viewByCat/{id}', [App\Http\Controllers\ProductController::class, 'viewByCat'])->name('product.categorie');
//category

Route::get('/detail/{id}', [App\Http\Controllers\HomeController::class, 'detail'])->name('detail');



Route::group(['middleware' => ['auth']], function () {
    //cart
    Route::post('/add_to_cart', [App\Http\Controllers\ProductController::class, 'addToCart']);
    Route::get('/cartList', [App\Http\Controllers\ProductController::class, 'cartList']);
    Route::get('/removeCart/{id}', [App\Http\Controllers\ProductController::class, 'removeCart']);
    //ordrePlace
    Route::get('/OrderNow', [App\Http\Controllers\ProductController::class, 'OrderNow']);
    Route::post('/OrdrePlace', [App\Http\Controllers\ProductController::class, 'OrdrePlace']);
});
Route::get('/facture/{id}', [App\Http\Controllers\DashOrdreController::class, 'GenerateFacture'])->name('facture.generate');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/Shop', [App\Http\Controllers\HomeController::class, 'Shop'])->name('Shop');
Route::get('/merci', function () {
    $categories  = Category::all();
    return view('remerciement', compact('categories'));
});

Route::get('/ln', function () {
    $categories  = Category::all();
    return view('Shop', compact('categories'));
});

Route::get('/s', function(){
    return view('FrendEnd.productDetail',compact('products'));
});
