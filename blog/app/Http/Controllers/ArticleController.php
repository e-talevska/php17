<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
    function index(){
        $articles = Article::all();//class article staticki meotd all, ne e povrzano samo so edna instanca
       // var_dump(compact("articles"));
        return view('articles.list', ['articles' => $articles]);//se praka niza
    }
}//vraka json api(vrakaat xml ili json standardi koi site jazici gi razbiraat) na localhost
