<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    PostController
};

Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
Route::get('/post/{id}', [PostController::class, 'show'])->name('posts.show');
Route::get('/post/update/{id}', [PostController::class, 'edit'])->name('posts.update');
Route::delete('/post/{id}', [PostController::class, 'destroy'])->name('posts.delete');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/', function () {
    return view('welcome');
});
