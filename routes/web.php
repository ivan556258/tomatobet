<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\V1\PostController;
use App\Http\Controllers\V1\AuthController;
use Inertia\Inertia;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('/login'),
        'canRegister' => Route::has('/register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::get('dashboard', [AuthController::class, 'posts'])->name('dashboard');
});

Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::get('/auth/posts', [AuthController::class, 'posts'])
        ->name('auth.posts');

    Route::get('/auth/edit/{id}', [AuthController::class, 'edit'])
        ->where('id', '[0-9]+')
        ->name('auth.edit');

    Route::get('/auth/post/add', [AuthController::class, 'add'])
        ->name('auth.post.add');

    Route::get('/auth/delete/{id}', [AuthController::class, 'delete'])
        ->where('id', '[0-9]+')
        ->name('auth.delete');

    Route::post('/auth/save/post', [AuthController::class, 'save'])
        ->name('auth.save.post');
});





Route::get('/', [PostController::class, 'posts'])->name('posts');
Route::get('/post/{id}', [PostController::class, 'post'])->where('id', '[0-9]+')->name('post');
Route::get('/typeSport/{urn}', [PostController::class, 'typeSport'])->name('typeSport');
