<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\VisitorController;

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

Route::get('/product/{id}', [MainController::class, 'show'])->name('product.show');

Route::get('/reviews', [MainController::class, 'reviews'])->name('reviews');

Route::get('/contact', [MainController::class, 'contact'])->name('contact');
Route::post('/contact', [MainController::class, 'send'])->name('contact.send');

Route::get('/login', [SesiController::class, 'loginPage'])->name('login')->middleware('guest');
Route::post('/login', [SesiController::class, 'login']);
Route::post('/logout', [SesiController::class, 'logout']);

Route::get('/register', [SesiController::class, 'registerPage'])->name('register')->middleware('guest');
Route::post('register', [SesiController::class, 'register']);

Route::get('/projects', [MainController::class, 'projects'])->name('projects');

Route::prefix('admin')->group(function () {
    Route::resource('projects', AdminController::class)->middleware('userAkses:admin');
    Route::get('/activity', [AdminController::class, 'activity'])->name('activity')->middleware('userAkses:admin');
    Route::delete('/activity/delete', [AdminController::class, 'deleteAll'])->name('activity.delete')->middleware('userAkses:admin');
    Route::get('/reviews', [VisitorController::class, 'index'])->name('reviews.index')->middleware('userAkses:admin');
    Route::delete('/reviews/{id}', [VisitorController::class, 'destroy'])->name('reviews.destroy')->middleware('userAkses:admin');
});

Route::prefix('visitor')->group(function () {
    Route::resource('reviews', VisitorController::class)->middleware('userAkses:visitor')->except(['index', 'destroy']);
});

Route::fallback(function () {
    return view('error', [
        'active' => '',
    ]);
});