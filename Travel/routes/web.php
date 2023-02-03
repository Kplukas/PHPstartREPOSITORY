<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountryController as CC;
use App\Http\Controllers\HotelController as HC;


Route::prefix('country')->name('c-')->group(function () {
    Route::get('/', [CC::class, 'index'] )->name('index');
    Route::get('/create', [CC::class, 'create'] )->name('create');
    Route::post('/create', [CC::class, 'store'] )->name('store');
    Route::get('/edit/{country}', [CC::class, 'edit'] )->name('edit');
    Route::put('/edit/{country}', [CC::class, 'update'] )->name('update');
    Route::delete('/delete/{country}', [CC::class, 'destroy'])->name('delete');
});
Route::prefix('hotel')->name('h-')->group(function () {
    Route::get('/', [HC::class, 'index'] )->name('index');
    Route::get('/create', [HC::class, 'create'] )->name('create');
    Route::post('/create', [HC::class, 'store'] )->name('store');
    Route::get('/edit/{hotel}', [HC::class, 'edit'] )->name('edit');
    Route::put('/edit/{hotel}', [HC::class, 'update'] )->name('update');
    Route::delete('/delete/{hotel}', [HC::class, 'destroy'])->name('delete');
});

/*
Route::prefix('admin/bank')->name('bank-')->group(function () {
    Route::get('/', [SC::class, 'index'] )->name('index');
    Route::get('/home', [SC::class, 'home'] )->name('home');
    Route::get('/create', [SC::class, 'create'] )->name('create');
    Route::post('/create', [SC::class, 'store'] )->name('store');
    Route::get('/edit/{saskaita}', [SC::class, 'edit'] )->name('edit');
    Route::put('/edit/{saskaita}', [SC::class, 'update'])->name('update');
    Route::delete('/delete/{saskaita}', [SC::class, 'destroy'])->name('delete');
    Route::get('/show/{saskaita}', [SC::class, 'show'])->name('show');
    Route::put('/show/plus/{saskaita}', [SC::class, 'plus'])->name('plus');
    Route::put('/show/minus/{saskaita}', [SC::class, 'minus'])->name('minus');
});
*/







Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
