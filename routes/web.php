<?php

use App\Http\Controllers\Admin;
use App\Http\Controllers\form;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Buku;

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

Route::resource('buku', Buku::class);

Route::get('/detail', [Buku::class, 'create']);


Route::post('/detail', [Buku::class, 'store']);

Route::get('/buku/komik/edit', [Buku::class, 'edit']);

Route::get('/', [Buku::class, 'index']);
