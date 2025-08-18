<?php

use Illuminate\Support\Facades\Route;
uSE App\Http\Controllers\HistoryController;
uSE App\Http\Controllers\HomeController;
uSE App\Http\Controllers\RealisationController;

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

Route::get('/',[HomeController::class,'home'])->name('home');
Route::get('devis',[HomeController::class,'devis'])->name('devis');
Route::get('contact',[HomeController::class,'contact'])->name('contact');

Route::get('history',[HistoryController::class,'history'])->name('history');
// REALISATION 
Route::get('realisations',[RealisationController::class,'index'])->name('realisation');
