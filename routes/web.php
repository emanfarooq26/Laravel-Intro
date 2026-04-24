<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
//Customer Web Routes
Route::get('/customers/index', [App\Http\Controllers\CustomerWebController::class, 'index'])->name('customers.index');
Route::get('test', [TestController::class, 'index']);