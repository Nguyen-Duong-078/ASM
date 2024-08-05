<?php

use App\Http\Controllers\admin\CategorieController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\NewController;
use App\Http\Controllers\admin\UserController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')
    ->as('admin.')
    ->middleware(['auth', 'isAdmin'])
    ->group(function () {

        Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');

        Route::prefix('categories')
            ->as('categories.')
            ->controller(CategorieController::class)
            ->group(function () {
                Route::get('/', 'index')->name('index');
                Route::get('create', 'create')->name('create');
                Route::post('store', 'store')->name('store');
                Route::get('show/{id}', 'show')->name('show');
                Route::get('{id}/edit', 'edit')->name('edit');
                Route::put('{id}/update', 'update')->name('update');
                Route::delete('{id}/destroy', 'destroy')->name('destroy');

            });

        Route::prefix('news')
            ->as('news.')
            ->controller(NewController::class)
            ->group(function () {
                Route::get('/', 'index')->name('index');
                Route::get('create', 'create')->name('create');
                Route::post('store', 'store')->name('store');
                Route::get('show/{id}', 'show')->name('show');
                Route::get('{id}/edit', 'edit')->name('edit');
                Route::put('{id}/update', 'update')->name('update');
                Route::delete('{id}/destroy', 'destroy')->name('destroy');
                Route::get('/search', 'search')->name('search');
            });
        Route::prefix('members')
            ->as('members.')
            ->controller(UserController::class)
            ->group(function () {
                Route::get('/', 'index')->name('index');
                Route::get('{id}/edit', 'edit')->name('edit');
                Route::put('{id}/update', 'update')->name('update');
                // Route::delete('{id}/destroy', 'destroy')->name('destroy');
            });

        // Route::resource('category', CategoryController::class);
        Route::post('logout', [DashboardController::class, 'logout'])->name('logout');
    });
