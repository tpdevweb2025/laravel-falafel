<?php

use App\Models\Comment;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

Route::get('/', [HomeController::class, "home"]);
Route::get("/posts", [PostController::class, "index"]);
Route::get("/posts/user/{user}", [UserController::class, "getPosts"]);
