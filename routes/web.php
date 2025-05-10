<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/dashboard', function () { 
    return view('dashboard');
})->name('dashboard');

Route::resource('categories', \App\Http\Controllers\CategoryController::class); 

require __DIR__.'/auth.php';
// ...
Route::get('/', function () {
    return view('welcome');
});
 
Route::middleware('auth')->group(function () {
    // ...
 
    Route::resource('categories', \App\Http\Controllers\CategoryController::class)->middleware('is_admin'); 
});
 
require __DIR__.'/auth.php';
Route::get('/', function () {
    return view('welcome');
});
 
Route::middleware('auth')->group(function () {
    // ...
 
    Route::resource('categories', \App\Http\Controllers\CategoryController::class)->middleware(\App\Http\Middleware\IsAdminMiddleware::class);  
});
 
require __DIR__.'/auth.php';
// Route::resource('categories', \App\Http\Controllers\CategoryController::class);