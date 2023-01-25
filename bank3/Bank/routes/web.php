<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SaskaitaController as SC;

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

Route::prefix('admin/bank')->name('bank-')->group(function () {
    Route::get('/', [SC::class, 'index'] )->name('index');
    Route::get('/create', [SC::class, 'create'] )->name('create');
    Route::post('/create', [SC::class, 'store'] )->name('store');
    Route::get('/edit/{type}', [SC::class, 'edit'] )->name('edit');
    Route::put('/edit/{type}', [SC::class, 'update'])->name('update');
    Route::delete('/delete/{type}', [SC::class, 'destroy'])->name('delete');
});







Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
