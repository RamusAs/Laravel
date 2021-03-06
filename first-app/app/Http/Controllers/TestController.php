<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class TestController extends Controller
{
    public function index() {
        $articles = Article::all();
        return $articles;
    }

     public function show( $id)
    {   
        $article = Article::find($id);
        return view('articles' , ['article' => $article]);
    }
}
