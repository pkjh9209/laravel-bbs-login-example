<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\BoardController;

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

//model test
Route::get('/', [FoodController::class, 'food'])->name('food');

//db test
Route::get('/news', [NewsController::class, 'news'])->name('news');

//게시판
Route::get('/boards',[BoardController::class,'index'])->name('index');

//글쓰기
Route::get('/boards/create',[BoardController::class,'create'])->name('create');

//
Route::post('/boards', [BoardController::class,'store'])->name('store');

// 
Route::get('/boards/{board}',[BoardController::class,'show'])->name('show');