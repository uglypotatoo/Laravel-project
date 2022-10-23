<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\qrController;
use App\Http\Controllers\newQrController;


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
    return view('welcome');
});

Route::get('/qrcode', [qrController::class, 'index']);


Route::get('/qrlist', [newQrController::class, 'index']);

Route::get('list', [newQrController::class, 'list']);

Route::get('shit', [newQrController::class, 'shit']);