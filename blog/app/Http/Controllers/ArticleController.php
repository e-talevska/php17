<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
    public function index() {
        $articles = Article::all();
//        var_dump(compact("articles"));
        return view('articles.list', ['articles' => $articles]);
    }
}
