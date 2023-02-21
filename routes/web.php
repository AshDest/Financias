<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/caissier', [App\Http\Controllers\HomeController::class, 'caissier'])->name('caissier');
Route::get('/caissier/add', [App\Http\Controllers\HomeController::class, 'addcaissier'])->name('addcaissier');
Route::get('/caissier/edit/{ids}', [App\Http\Controllers\HomeController::class, 'editcaissier'])->name('editcaissier');
Route::get('/change', [App\Http\Controllers\HomeController::class, 'changesmenus'])->name('changesmenus');

Route::get('/users', [App\Http\Controllers\HomeController::class, 'users'])->name('users');
Route::get('/user/add', [App\Http\Controllers\HomeController::class, 'adduser'])->name('adduser');
Route::get('/user/edit/{ids}', [App\Http\Controllers\HomeController::class, 'edituser'])->name('edituser');