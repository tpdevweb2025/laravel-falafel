<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $user = User::select()
            ->where(["id" => 1, "email" => "test@example.com"])
            ->first();
        return view("welcome", [
            "user" => $user,
            "fruits" => [
                "Pomme",
                "Poire",
                "Fraise"
            ]
        ]);
    }
}
