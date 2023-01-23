<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManoController as Mano;
use App\Http\Controllers\PostController as PC;

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
    return view('welcome');
});

Route::get('/projektas/enter/{id}', [Mano::class, 'enter']);
Route::get('/projektas/show/{number}', [Mano::class, 'showKint'])->name('linkas');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/do-sum', [PC::class, 'showForm'])->name('show-form');
