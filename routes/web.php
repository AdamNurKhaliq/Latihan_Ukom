<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('customer.index');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/dashboard/{id}/delete', [CustomerController::class, 'delete'])->name('customer.delete');
Route::resource('customer', CustomerController::class);
