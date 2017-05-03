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
    
    public function create() {
//        $allCategories = \App\Category::all();
//        $categories = [];
//        foreach ($allCategories as $category) {
//            $categories[$category->id] = $category->title;
//        }
//        var_dump($allCategories);

        $categories = \App\Category::pluck('title','id');
        return view('articles.create', ['categories' => $categories]);
    }
    
    public function store(\Request $request) {
//        var_dump($request::all());exit;
//        var_dump(\Auth::guest());
        $input = $request::all();
        $input['user_id'] = \Auth::user()->id;
        Article::create($input);
    }
}
