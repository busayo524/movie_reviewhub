<?php

use App\Http\Controllers\MovieController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/', [MovieController::class, 'index'])->name('movies.index');
Route::get('/movies', [MovieController::class, 'index'])->name('movies.index');
Route::get('/movies/add', [MovieController::class, 'add'])->name('movies.add');
Route::post('/movies', [MovieController::class, 'store'])->name('movies.store');
Route::delete('/movies/{movie}', [MovieController::class, 'destroy'])->name('movies.destroy');
Route::get('/movies/{movie}', [MovieController::class, 'show'])->name('movies.show');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
