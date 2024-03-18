<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('welcome');
});


Route::get ('TelaLogin', [LoginController::class, 'TelaLogin'])->name('Login.index');