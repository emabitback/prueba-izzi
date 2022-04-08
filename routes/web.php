<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OfficeController;
use App\Http\Controllers\ProfileController;

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
    //return view('welcome');
    return redirect('/login');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/product/list', [ProductsController::class, 'all']);
Route::get('/product/view/add', [ProductsController::class, 'index']);

Route::post('/category/all', [CategoryController::class, 'show']);
Route::post('/office/all', [OfficeController::class, 'show']);
Route::post('/product/add', [ProductsController::class, 'store']);
Route::post('/product/all', [ProductsController::class, 'show']);


Route::post('/profile/all', [ProfileController::class, 'show']);