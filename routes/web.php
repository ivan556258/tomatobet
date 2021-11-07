<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\V1\PostController;

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

Route::get('/', [PostController::class, 'posts'])->name('posts');
Route::get('/post/{id}', [PostController::class, 'post'])->where('id', '[0-9]+')->name('post');
Route::get('/typeSport/{urn}', [PostController::class, 'typeSport'])->name('typeSport');