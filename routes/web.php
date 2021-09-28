<?php

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
    return view('main.index');
});

Route::get('lamanutama', [App\Http\Controllers\MainController::class, 'index'])->name('lamanutama');
Route::get('servis', [App\Http\Controllers\ServiceController::class, 'index'])->name('servis');
Route::get('hubungikami', [App\Http\Controllers\ContactUsController::class, 'index'])->name('hubungikami');
