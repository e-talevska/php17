<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
class ArticleController extends Controller
{
    public function index() {
        $articles =  Article::all();
    // var_dump (compact($articles));
        return view('articles.list', ['articles' => $articles]);
    }
    public function create() {
        $categories = \App\Category::pluck('title','id');
        return view('articles.create', ['categories' => $categories]);
    }
    public function store(\Request $request) {
        $input = $request::all();
        $input['user_id'] = \Auth::user()->id;
        Article::create($input);
        
    }
}
