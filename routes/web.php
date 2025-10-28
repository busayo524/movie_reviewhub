<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;

Route::get('/register',  [MovieController::class, 'register'
])->name('show.register');
Route::get('/login',  [MovieController::class, 'login'
])->name('show.login');

Route::get('/',  [MovieController::class, 'index'
])->name('movies.index');
Route::get('/movies', [MovieController::class, 'index'
])->name('movies.index');
Route::get('/movies/add', [MovieController::class, 'add'
])->name('movies.add');
Route::get('/movies/{movie}', [MovieController::class, 'show'
])->name('movies.show');
Route::post('/movies', [MovieController::class, 'store'
])->name('movies.store');
Route::delete('/movies/{movie}', [MovieController::class, 'destroy'
])->name('movies.destroy');
