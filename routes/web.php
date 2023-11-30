<?php

use App\Http\Controllers\Medee;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Category;
use App\Http\Controllers\News;
use App\Http\Controllers\ModalController;
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


Route::get('/show-modal', [ModalController::class, 'showModal'])->name('showModal');
Route::post('/submit-form', [ModalController::class, 'submitForm'])->name('submitForm');
Route::get('/modal', function () {
    return view('modal3'); 
});
Route::get('/', function () {
    return view('login-register');
});
// Route::get('/', [Medee::class, 'index'])->name('index');
// Route::get('/detail/{oneNews}', [Medee::class, 'detail'])->name('detail');
// Route::get('/category/{category}', [Medee::class, 'cat'])->name('categoryMedee');

//admin heseg
Route::get('/admin/home', [Category::class, 'index'])->name('cat_home');
Route::get('/admin/category/create', [Category::class, 'create'])->name('cat_create');
Route::post('/admin/category/create', [Category::class, 'store'])->name('cat_store');
Route::get('/admin/category/update/{cat}', [Category::class, 'edit'])->name('cat_edit');
Route::put('/admin/category/update/{id}', [Category::class, 'update'])->name('cat_update');
Route::delete('/admin/category/delete/{category}', [Category::class, 'destroy'])->name('cat_delete');



Route::get('/admin/news', [News::class, 'index'])->name('news');
Route::get('/admin/news/create', [News::class, 'create'])->name('news_create');
Route::post('/admin/news/create', [News::class, 'store'])->name('news_store');