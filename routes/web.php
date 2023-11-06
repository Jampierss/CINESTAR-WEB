<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\cinestarController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::controller(cinestarController::class) -> group(function(){
    Route::get('/','index');
    Route::get('cines','cines')->name('cines');
    Route::get('cartelera', 'cartelera')->name('cartelera');
    Route::get('estrenos', 'estrenos')->name('estrenos');
    Route::get('/cine/{id}', [cinestarController::class, 'cine'])->name('cine');
});
