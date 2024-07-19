<?php

use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\NewController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')
    ->as('admin.')
    ->group(function () {

        Route::get('/', function () {
            return view('admin.dashboard');
        });

        Route::prefix('categorys')
            ->as('categorys.')
            ->controller(CategoryController::class)
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

        // Route::resource('category', CategoryController::class);
    });
