<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\lab10Controller;
use App\Http\Controllers\lab5;

Route::get('/lab5', [lab5::class, 'show']);
Route::get('/lab9', [PostController::class, 'show']);
Route::get('/post/all', [lab10Controller::class, 'getAll']);
Route::get('/post/{id}', [lab10Controller::class, 'getOne']);