<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Models\Categorie;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Authentication
Auth::routes(['verify' => true]);

Route::get('/', [HomeController::class, 'index'])
    ->middleware(['auth', 'isMember', 'verified'])
    ->name('client.home');

Route::get('{id}/new_detail', [HomeController::class, 'new_detail'])
    ->name('new_detail');
Route::get('{id}/popular', [HomeController::class, 'popular'])
    ->name('client.views.popular');

Route::get('/categorie/{id}', [HomeController::class, 'showCategorieNews']);
Route::get('/search', [HomeController::class, 'search'])->name('search');

// Authentication
Route::get('login', [LoginController::class, 'showFormLogin'])->name('auth.login');
Route::post('login', [LoginController::class, 'login']);
Route::get('register', [RegisterController::class, 'showFormRegister'])->name('auth.register');
Route::post('register', [RegisterController::class, 'register']);
