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
    return view('home');
})->name('index.get');

Route::middleware(['web'])->group(function () {
    Route::get('/cadastro', [App\Http\Controllers\ResgisterController::class, 'register'])->name('register');
    Route::post('/new', [App\Http\Controllers\ResgisterController::class, 'new'])->name('register.new');
    Route::post('/login', [App\Http\Controllers\LoginController::class, 'login'])->name('login');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/info', [App\Http\Controllers\ResgisterController::class, 'info'])->name('info');
    Route::post('/info/new', [App\Http\Controllers\ResgisterController::class, 'newInfo'])->name('info.post');

    Route::middleware(['student'])->group(function () {
    Route::get('/index/course', [App\Http\Controllers\CourseController::class, 'index'])->name('course.index');

    });
});
