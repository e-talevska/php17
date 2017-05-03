<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
    public function index(){
        $articles = Article::all();//class article staticki metod all, ne e povrzano samo so edna instanca
       // var_dump(compact("articles"));
        return view('articles.list', ['articles' => $articles]);//se praka niza
    }
    
    public function create(){
        $categories = \App\Category::pluck('title', 'id');//metod dozvoluva da procita title i id, rezultat lista prvo se vrednostite, vtoro se klucevite
        return view ('articles.create', ['categories' => $categories]);
    }
    
    public function store(\Request $request){//gi predava kako argument od akcijata vo form preku class Request
        //od koj tip ke e promenlivata $request
        //var_dump($request::all());// fasada namesto objekti so staticki medoti so ::, vraka all site mozni inputi od formata vo $request
       //Article::create($request::all());
        //modelot app article onie koi se odg za rab so baza
        //kreiraj i smesti go vo baza
        //kluc - kolonite, arg od samite koloni - vrednosti
        //var_dump(\Auth::quest());
        $input = $request::all();
        $input['user_id'] = \Auth::user()->id;
        Article::create($input);
    }
}//vraka json api(vrakaat xml ili json standardi koi site jazici gi razbiraat) na localhost
//MassAssignmentException: ako se setiraat poveke propertija i da se smestat vo baza, formite se najranlivi,
//ne dava da se apdejtira se odednas