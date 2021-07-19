<?php

use App\Http\Controllers\SociosController;
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


//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::get('/socios', [App\Http\Controllers\SociosController::class, 'index'])->name('socios');
//Route::get('/socios/create', [App\Http\Controllers\SociosController::class, 'create'])->name('socios.create');

Route::get('socios', [SociosController::class, 'index'])->name('socios');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

