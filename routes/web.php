<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\lab5;

Route::get('/lab5', [lab5::class, 'show']);
Route::get('/lab9', [PostController::class, 'show']);
Route::get('/lab10', [lab10Controller::class, 'getAll']);