<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalcController;

Route::get('/', function () {
    return view('welcome');
});


Route::post('process', [CalcController::class, 'calculate'])->name("calculator.process");

Route::get('/', [CalcController::class, 'index'])->name("calculator.home");

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
