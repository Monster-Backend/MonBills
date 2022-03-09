<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\InvoicesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::resource("invoices", InvoicesController::class);

Route::get('/{page}', [AdminController::class, "index"]);

// jetstream lib
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
