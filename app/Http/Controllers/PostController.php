<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Méthode qui affichera tous les posts de l'app
     */
    public function index()
    {
        $posts = Post::all();
        dd($posts);
        return view("posts", [
            "posts" => $posts
        ]);
    }
}
