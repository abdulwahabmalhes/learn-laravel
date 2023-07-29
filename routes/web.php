<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticController;
use App\Http\Controllers\ComputersControllers;

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

Route::get('/', [StaticController::class, 'index'])->name('home.index');

Route::get('/about', [StaticController::class, 'about'])->name('home.about');

Route::get('/contact', [StaticController::class, 'contact'])->name('home.contact');

Route::resource('computers', ComputersControllers::class);


