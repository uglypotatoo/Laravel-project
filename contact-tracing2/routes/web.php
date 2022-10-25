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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin', 'App\Http\Controllers\DashboardController@index');*/

Route::get('/', function () {
    return view('index');
})->name('index');

// Route::get('/login', function () {
//     return view('auth.login');
// })->name('login');

// Route::get('/register', function () {
//     return view('auth.register');
// })->name('register');

// Route::post('/', [App\Http\Controllers\AuthController::class, 'create'])->name('register');

// Route::get('/verify', function () {
//     return view('auth.verify');
// })->name('verify');
// Route::post('/verify', [App\Http\Controllers\AuthController::class, 'verify'])->name('verify');

// Route::get('/home', function () {
//     return view('home');
// })->name('home');

// Route::get('/admin', function () {
//     return view('users.dashboard');
// })->name('admin');

// Route::get('/admin/dashboard', function () {
//     return view('users.dashboard');
// })->name('admin');

// Route::get('/admin/accounts', function () {
//     return view('users.accounts');
// })->name('admin');

// Route::get('/admin/establishment', function () {
//     return view('users.establishment');
// })->name('admin');

// Route::get('/admin/profile', function () {
//     return view('users.profile');
// })->name('admin');


// Route::get('/admin/esb_logs', function () {
//     return view('admin.esb_logs');
// })->name('admin');


// Route::get('/auth/passwords/verify', function () {
//     return view('auth.passwords.verify');
// })->name('verify');

Route::get('/admin/users', function () {
    return view('users.users');
})->name('users');

Route::get('/admin/report', function () {
    return view('users.report');
})->name('report');

Route::get('/person', function () {
    return view('users.person');
})->name('person');

Route::get('/user_estab', function () {
    return view('users.user_estab');
})->name('user_estab');

Route::get('/logs-user', function () {
    return view('logs-user');
})->name('logs-user');

Route::get('/logs', function () {
    return view('logs');
})->name('logs');

Route::get('/report-logs', function () {
    return view('report-logs');
})->name('report-logs');


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
/*Route::post('/', 'AuthController@create')->name('register');
Route::post('/verify', 'AuthController@verify')->name('verify');*/  