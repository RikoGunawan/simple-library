<?php

use App\Http\Controllers\BookController;
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

//FUNCTION LOGIN
Route::group(['middleware' => 'auth'], function () {
    // Masukkan route yang ingin diproteksi di sini
    Route::get('/', [BookController::class, 'index'])->name('book');

    Route::get('form', [BookController::class, 'form'])->name('book.form');

    Route::post('store', [BookController::class, 'store'])->name('book.store');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
