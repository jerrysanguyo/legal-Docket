<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UnauthorizedController;
use App\Http\Middleware\AdminRole;
use App\Http\Middleware\AttyRole;
use App\Http\Middleware\SecretaryRole;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])
    ->name('home');
Route::get('/unauthorized', [UnauthorizedController::class, 'index'])
    ->name('unauthorized.index');

Route::middleware(['auth', AdminRole::class])->group(function () {
    Route::prefix('admin')->name('admin.')->group(function () {

    });
});

Route::middleware(['auth', AttyRole::class])->group(function () {
    Route::prefix('atty')->name('atty.')->group(function () {

    });
});

Route::middleware(['auth', SecretaryRole::class])->group(function () {
    Route::prefix('secretary')->name('secretary.')->group(function () {

    });
});