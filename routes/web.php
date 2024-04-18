<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UnauthorizedController;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\AdminRole;
use App\Http\Middleware\AttyRole;
use App\Http\Middleware\SecretaryRole;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::get('/unauthorized', [UnauthorizedController::class, 'index'])
    ->name('unauthorized.index');

Route::middleware(['auth', AdminRole::class])->group(function () {
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::get('/home', [HomeController::class, 'index'])
            ->name('home');
    });
});

Route::middleware(['auth', AttyRole::class])->group(function () {
    Route::prefix('atty')->name('atty.')->group(function () {
        Route::get('/home', [HomeController::class, 'index'])
            ->name('home');
    });
});

Route::middleware(['auth', SecretaryRole::class])->group(function () {
    Route::prefix('secretary')->name('secretary.')->group(function () {
        Route::get('/home', [HomeController::class, 'index'])
            ->name('home');
    });
});