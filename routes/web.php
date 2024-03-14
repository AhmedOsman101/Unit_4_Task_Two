<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::group(['middleware' => 'guest'], function () {
    Route::view('/login', 'auth.login');
    Route::post('/login', [AuthController::class, 'login'])->name('login');

    Route::view('/register', 'auth.register');
    Route::post('/register', [AuthController::class, 'register'])->name('register');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', function () {
        return view('home');
    });
    Route::get('/home', function () {
        return view('home');
    });
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::get('/events', function () {
    return 'hello world';
})->name('events');

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin', function () {
        return 'hello world';
    })->name('admin');

    Route::get('/admin/users', function () {
        return view('admin.usersDashboard');
    })->name('admin.users');

    Route::put('/users/{id}', [UserController::class, 'update']);
    Route::delete('/users/{id}', [UserController::class, 'destroy']);

});
