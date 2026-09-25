<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;

Route::inertia('/', 'Welcome')->name('home');
Route::get('/blogs',[BlogController::class, 'index'])->name('blogs');

Route::get('/blogs/create',[BlogController::class, 'Create'])->name('blogs.create');
Route::post('/blogs/store',[BlogController::class, 'Store'])->name('blogs.store');

Route::get('/blogs/{blog}/edit',[BlogController::class, 'Edit'])->name('blogs.edit');
Route::post('/blogs/{blog}/update',[BlogController::class, 'Update'])->name('blogs.update');

Route::post('/blogs/{blog}/delete',[BlogController::class, 'Delete'])->name('blogs.delete');

Route::get('/users/{user}',[UserController::class, 'User'])->name('user');

Route::get('/blogs/{blog}',[BlogController::class, 'Show'])->name('blogs.show');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::inertia('dashboard', 'Dashboard')->name('dashboard');
});


require __DIR__.'/settings.php';
