<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\RestoController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'menus'], function(){
    Route::get('', [MenuController::class, 'index'])->name('menu.index');
    Route::get('create', [MenuController::class, 'create'])->name('menu.create');
    Route::post('store', [MenuController::class, 'store'])->name('menu.store');
    Route::get('edit/{menu}', [MenuController::class, 'edit'])->name('menu.edit');
    Route::post('update/{menu}', [MenuController::class, 'update'])->name('menu.update');
    Route::post('delete/{menu}', [MenuController::class, 'destroy'])->name('menu.destroy');
    Route::get('show/{menu}', [MenuController::class, 'show'])->name('menu.show');
 });

 Route::group(['prefix' => 'restos'], function(){
    Route::get('', [RestoController::class, 'index'])->name('resto.index');
    Route::post('', [RestoController::class, 'index'])->name('resto.show');
    Route::get('create', [RestoController::class, 'create'])->name('resto.create');
    Route::post('store', [RestoController::class, 'store'])->name('resto.store');
    Route::get('edit/{resto}', [RestoController::class, 'edit'])->name('resto.edit');
    Route::post('update/{resto}', [RestoController::class, 'update'])->name('resto.update');
    Route::post('delete/{resto}', [RestoController::class, 'destroy'])->name('resto.destroy');
    Route::post('show', [RestoController::class, 'show'])->name('resto.show');
 });


 Route::get('/edit', [RestoController::class, 'index'])->middleware('auth:admin');