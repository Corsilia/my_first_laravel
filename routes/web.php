<?php

use Illuminate\Console\View\Components\Alert;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ShoppingCartController;

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
// ↓這樣是以controller為主
Route::get('/',[Controller::class, 'index']);

Route::get('/microsoft',[NewsController::class, 'microsoft']);

Route::get('/say',[Controller::class, 'say']);

Route::get('/bs_index',[ShoppingCartController::class, 'bootstrap_index']);
Route::get('/bs_about',[ShoppingCartController::class, 'bootstrap_about']);


// 這是沒有緣分還沒有做出來的登入頁
// 做出來啦～
Route::get('/login',[ShoppingCartController::class,'login']);
Route::get('/shopping',[ShoppingCartController::class,'shopping_index']);
Route::get('/checkout1',[ShoppingCartController::class,'checkout1']);
Route::get('/checkout2',[ShoppingCartController::class,'checkout2']);
Route::get('/checkout3',[ShoppingCartController::class,'checkout3']);
Route::get('/checkout4',[ShoppingCartController::class,'checkout4']);

// ↓這樣是用Route去呼叫
// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/test',function(){
//     return view('welcome');
// });
// Route::get('/say',function(){
//     return 'Hello world';
// });
// Route::get('/microsoft', function () {
//     return view('microsoft');
// });
