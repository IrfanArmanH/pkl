<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

// use App\Http\Controllers\PostController;
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
Route::get('/Form Pengaduan', function () {
    return view('posts.form_pengaduan');
})->name('form_pengaduan');

Route::get('/Beranda Kantor PUPR', function () {
    return view('posts.beranda');
})->name('beranda');

Route::get('/Detail Page', function () {
    return view('posts.detail');
})->name('detail');

Route::get('/search', [PostController::class,'search'])->name('search');

Route::get('fetch_search', 'SearchController@fetchSearch')->name('fetch_search');

// Route::get('/search', 'PostController@search')->name('posts.search');

Route::resource('/posts', \App\Http\Controllers\PostController::class);

Route::get('/', 'PostController@showIndex');
