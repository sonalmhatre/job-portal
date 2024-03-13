<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/exam/{id}', [App\Http\Controllers\HomeController::class, 'exam'])->name('exam');
Route::post('/storeexam', [App\Http\Controllers\HomeController::class, 'storeexam'])->name('storeexam');

Route::group(['middleware' => ['auth']], function() {
    Route::get('/job', [App\Http\Controllers\JobController::class, 'create'])->name('job.create');
    Route::post('/job', [App\Http\Controllers\JobController::class, 'store'])->name('job.store');
});