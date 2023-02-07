<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

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

Route::get('/infos', function () {
    return view('infos');
});
// Route::view('/acces', 'acces', ['name' => 'Taylor']);

Route::get('/test/{nom}', [TestController::class, 'method1']);
Route::get('/exemple', [TestController::class, 'exemple'])->name('profile');
Route::get('/', [TestController::class, 'home']);
// Route::post('/home', [TestController::class, 'ht']);
Route::post('/home', [TestController::class, 'store']);

Route::get('/acces/{nom}', [TestController::class, 'acces']);

Route::get('/acces', function(){
    return view('acces');
});


