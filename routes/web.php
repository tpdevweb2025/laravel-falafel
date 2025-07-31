<?php

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    // dd(Post::with("likes")->get()[4]);
    return view("welcome", [
        "posts" => Post::all()
    ]);
});



Route::get("/posts/commentaires/{id}", function ($id) {
    dd(Comment::where("id", $id)->first());
})->name("comments");




Route::get("/posts", [PostController::class, "index"]);
Route::get("/posts/user/{user}", [UserController::class, "getPosts"]);
