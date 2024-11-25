<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

route::get('/about', [AboutController::class, "about"]);
route::get('/about/me', [AboutController::class, "aboutMe"]);

route::get("/download", [FileController::class, "download"]);

route::get("/download/invoice/{InvoiceId}", [FileController::class, "downloadInvoice"]);
// route::get("/download/invoice/{InvoiceId}/type", [FileController::class, "downloadInvoice"]);
route::get("/download/invoice/{InvoiceId}/type/{fileType?}", [FileController::class, "downloadInvoice"]);
route::get("/download/invoice", [FileController::class, "error"]);
//route::get("/download/invoice/{InvoiceId}/type/{fileType}",[FileController::class,"downloadInvoiceWithType"]);
