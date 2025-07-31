<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Methode qui affichera l'utilisateur et ses posts
     */
    public function getPosts(int $user)
    {
        $posts = User::where("id", $user)->with("posts")->get();
        dd($posts);
    }
}
