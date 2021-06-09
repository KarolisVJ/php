<?php

use App\Http\Controllers\BebrasController;
use App\Http\Controllers\TreeController;
use Illuminate\Support\Facades\Route;
// use Session;
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

Route::get('hello', function () {
    return 'Hello, Biebers!';
});

Route::get('hello-what', [BebrasController::class, 'sayHello']);

Route::get('hello-what/{color}', [BebrasController::class, 'sayHello']);

Route::get('asmenai/{parametras}', [BebrasController::class, 'blade']);

Route::get('minus', [BebrasController::class, 'rodytiMinusatoriu'])->name('rodyti');

Route::post('minus', [BebrasController::class, 'darytiMinusatoriu'])->name('do');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('trees/create', [TreeController::class, 'create'])->name('tree.create');
Route::get('trees', [TreeController::class, 'index'])->name('tree_index');
Route::post('trees/store', [TreeController::class, 'store'])->name('tree_store');
Route::post('trees/update/{tree}', [TreeController::class, 'update'])->name('tree_update');
Route::post('trees/destroy/{tree}', [TreeController::class, 'destroy'])->name('tree_destroy');

Route::get('trees/edit/{tree}', [TreeController::class, 'edit'])->name('tree_edit');


