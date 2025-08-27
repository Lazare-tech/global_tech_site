<?php

use Illuminate\Support\Facades\Route;
uSE App\Http\Controllers\HistoryController;
uSE App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsletterController;
uSE App\Http\Controllers\RealisationController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DevisController;


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
Route::get('detail/realisations',[RealisationController::class,'show'])->name('detail_realisation');

//SERVICES
Route::get('services',[ServiceController::class,'index'])->name('service');
//NEWSLETTER
Route::post('',[NewsletterController::class,'store'])->name('newsletter.store');
//CONTACT
Route::post('contact',[ContactController::class,'store'])->name('contact.store');
//DEVIS
Route::post('devis',[DevisController::class,'store'])->name('devis.store');

