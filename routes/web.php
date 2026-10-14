<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// Главная
Route::get('/', [ArticleController::class, 'index'])->name('home');

// Категория
Route::get('/twos', [ArticleController::class, 'category'])->name('category');
Route::get('/twos/{category}', [ArticleController::class, 'category'])->name('category.show');

// Журналист (только для авторизованных)
Route::middleware('auth')->group(function () {
    Route::get('/threes', [ArticleController::class, 'create'])->name('journalist');
    Route::post('/threes', [ArticleController::class, 'store'])->name('journalist.store');
});

// Админ (пока заглушка)
Route::get('/fourths', function () {
    return view('fourths');
})->name('admin');

// Регистрация
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

// Вход
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

// Выход
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');