<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

// Route::get('/posts', function () {
//     return view('posts/index');
// });

Route::get('/posts', [PostController::class, 'index']);

Route::get('/posts/create', [PostController::class, 'create']);

Route::post('/posts/create', [PostController::class, 'store'])->name('posts.store');
// Route::post('/vendors/store', [VendorController::class, 'store'])->name('vendors.store');

// Route::get('products/{id}', [ProductController::class, 'show']);
Route::get('/posts/{id}', [PostController::class, 'show']);