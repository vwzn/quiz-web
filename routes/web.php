<?php
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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
Route::get('/products/tersedia', [ProductController::class, 'tersedia']);
Route::get('/products', [ProductController::class, 'index'])->name('products.index');


Route::get('/', function () {
    return view('welcome');
});
