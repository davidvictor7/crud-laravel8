<?php

use App\Http\Controllers\{
    PostController
};

use Illuminate\Routing\Route;

Route::post('/criarPost', [PostController::class, 'criarPost']);
Route::get('/posts', [PostController::class, 'Index'])->name('Index');

Route::get('/', [PostController::class, 'Index']);