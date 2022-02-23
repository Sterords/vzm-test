<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/', [\App\Http\Controllers\ConfigController::class, 'index'])->name('form');


//Route::post('/', function () {
//    return view('home');
////    return Request::all(); // Возвращаем все данные из формы
////    return 'okey'; // Возвращаем все данные из формы
//})->name('Comment-Form');



