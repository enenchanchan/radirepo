<?php

use App\Http\Controllers\ArticleController;
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

Route::get('top', function () {
    return  view('articles.toppage');
});


Auth::routes();
Route::get('/', [ArticleController::class, 'index'])->name(('articles.index'));
Route::resource('articles', ArticleController::class)->except('index', 'show')->middleware('auth');
Route::resource('articles', ArticleController::class)->only('show');
