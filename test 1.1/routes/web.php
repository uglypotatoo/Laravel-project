<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OAuth;
use App\Http\Controllers\Individual;

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

/*Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');*/


Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::post('/logout', [OAuth\RegisterController::class, 'logout']);

Route::middleware(['guest'])->group(function () {
    Route::get('/login', [OAuth\RegisterController::class, 'login']);
    Route::post('/login', [OAuth\RegisterController::class, 'loginUser']);
    Route::get('/register', [OAuth\RegisterController::class, 'register']);
    Route::post('/register', [OAuth\RegisterController::class, 'create']);
    Route::get('/register/establishment', [OAuth\RegisterController::class, 'registerEstablishment']);
    Route::post('/register/establishment', [OAuth\RegisterController::class, 'createEstablishment']);
});

Route::get('/login', [OAuth\RegisterController::class, 'login']);

Route::get('/dashboard', [Individual\HomeController::class, 'index']);
Route::get('/qrcode', [Individual\HomeController::class, 'qrcode']);
Route::get('/account', [Individual\HomeController::class, 'account']);


// register
Route::middleware([])->group(function () {

});

Route::middleware(['verifyIndividual'])->group(function () {
    Route::get('/verify', [OAuth\RegisterController::class, 'verifyView']);
    Route::post('/verify', [OAuth\RegisterController::class, 'verify']);
});

// Auth::routes();
  
/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
// Route::middleware(['auth', 'user-access:person'])->group(function () {
  
//     Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// });
  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
// Route::middleware(['auth', 'user-access:admin'])->group(function () {
  
//     Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home');
// });
  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
// Route::middleware(['auth', 'user-access:manager'])->group(function () {
  
//     Route::get('/establishment/home', [App\Http\Controllers\HomeController::class, 'establishmentHome'])->name('establishment.home');
// });