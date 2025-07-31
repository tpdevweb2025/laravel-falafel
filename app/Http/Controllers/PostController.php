<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {

        return view("posts", [
            "post" =>  Post::where("id", 252)->with("user")->first()
        ]);
    }
}
