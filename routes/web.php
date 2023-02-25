<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\UserController;

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

Route::get('register', [UserController::class, 'register'])->name('regidter');
Route::get('/', [ArticleController::class, 'index'])->name('home');


Route::prefix('articles')->group(function(){
    Route::post('/', [ArticleController::class, 'store'])->name('articles');
    // Route::get('/{id}', [ArticleController::class, 'show'])->name('aticles.show');
    Route::get('/{article}', [ArticleController::class, 'show'])->name('articles.show');
    Route::get('/{article}/edit', [ArticleController::class, 'edit'])->name('articles.edit');
    Route::put('/{article}/update', [ArticleController::class, 'update'])->name('articles.update');
    Route::delete('/{article}/delete', [ArticleController::class, 'delete'])->name('articles.delete');

});


