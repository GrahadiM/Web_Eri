<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [App\Http\Controllers\FrontendController::class, 'index']);
Route::get('/designGrafis', [App\Http\Controllers\FrontendController::class, 'designGrafis']);
Route::get('/editingVideo', [App\Http\Controllers\FrontendController::class, 'editingVideo']);
Route::get('/contact', [App\Http\Controllers\FrontendController::class, 'contact']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/post', App\Http\Controllers\PostController::class);
