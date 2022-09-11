<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\TestController;
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
    return view('home');
})->name('home');

Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');

Route::get('/about', function () {
    return view('about', ['nombre' => 'Raul']);
})->name('about');

Route::get('/test', [TestController::class, 'index'])->name('test');
