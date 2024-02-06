<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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

Route::get('/', [MainController::class, 'index'])->name('home');

Route::get('/about', [MainController::class, 'about'])->name('about');

Route::get('/services', [MainController::class, 'services'])->name('services');

Route::get('/projects', [MainController::class, 'projects'])->name('projects');

Route::get('/projects/{id}', [MainController::class, 'show'])->name('projects.show');

Route::get('/reviews', [MainController::class, 'reviews'])->name('reviews');

Route::get('/contact', [MainController::class, 'contact'])->name('contact');
