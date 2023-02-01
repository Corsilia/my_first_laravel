<?php

use Illuminate\Console\View\Components\Alert;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\BeginController;

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

Route::get('/today', [BeginController::class, 'today']);

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
