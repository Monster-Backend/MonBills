<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\InvoicesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SectionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

// invoices
Route::resource("invoices", InvoicesController::class);
// sections
Route::resource("sections", SectionController::class);
// products
Route::resource("products", ProductController::class);

Route::get('/{page}', [AdminController::class, "index"]);

// jetstream lib
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
