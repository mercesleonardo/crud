<?php

use Illuminate\Support\Facades\Route;

Route::get('/posts/create', [PostController::class,'create']);

Route::get('/', function () {
    return view('welcome');
});
