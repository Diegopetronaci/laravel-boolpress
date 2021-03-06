<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Article;
class homeController extends Controller
{
    //
    /* use App/Post;
    $posts = Post::all(); */

    public function indexHome()
    {
        $title = "Blog";
        return view('home', compact('title'));
    }

    public function indexAbout()
    {
        return view('about');
    }

    
    public function indexAdmin()
    {
        return view('admin');
    }
    
    public function articles_api()
    {
        return view('spa.articles');
    }

    public function indexBlog()
    {
        $articles = Article::all();
        return view('spa.blog', compact('articles'));
    }
}
