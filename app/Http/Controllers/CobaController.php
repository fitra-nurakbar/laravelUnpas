<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Routing\Controller;

class CobaController extends Controller
{
    public function home()
    {
        return view('home', [
            "title" => "Home"
        ]);
    }

    public function about()
    {
        return view('about', [
            "title" => "About",
            "name" => "Fitra Nurakbar",
            "email" => "fitranurakbar378@gmail.com",
            "no_hp" => "089630958735"
        ]);
    }

    public function index(Post $post)
    {
        return view('blog', [
            "title" => "Blog",
            "article" => $post::all()
        ]);
    }

    public function detail(Post $post)
    {
        return view('post', [
            "title" => "Detail",
            "article" => [$post] 
        ]);
    }
}
