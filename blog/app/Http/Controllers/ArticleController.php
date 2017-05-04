<?php

namespace App\Http\Controllers;
use \Illuminate\Support\Facades\Input;//za Input
use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
    
    function __construct(){
        $this->middleware(['auth', 'checkIfAuthor']); //['except' => '']);//se dava imeto na middleware auth //  moze da bide niza ako ima poveke middlewares
    }//ako odime na articles redirektira na login //moze da se izlistat rutite za koi ne sakame da vazi except/only
    //od kernel
    public function index(){
        $articles = Article::all();//class article staticki metod all, ne e povrzano samo so edna instanca
       // var_dump(compact("articles"));
        return view('articles.list', ['articles' => $articles]);//se praka niza
    }
    
    public function create(){
        $categories = \App\Category::pluck('title', 'id');//metod dozvoluva da procita title i id, rezultat lista prvo se vrednostite, vtoro se klucevite
        return view ('articles.create', ['categories' => $categories]);
    }
    
    public function store(Request $request){//gi predava kako argument od akcijata vo form preku class Request
        //od koj tip ke e promenlivata $request
        //var_dump($request::all());// fasada namesto objekti so staticki medoti so ::, vraka all site mozni inputi od formata vo $request
       //Article::create($request::all());
        //modelot app article onie koi se odg za rab so baza
        //kreiraj i smesti go vo baza
        //kluc - kolonite, arg od samite koloni - vrednosti
        //var_dump(\Auth::quest());
        $this->validate($request, [
            'title' => 'required|min:3',
            'body' => 'required',
            'excerpt' =>'required',
            'slug' => 'required|unique:articles',
            'featured_image' => 'required|image',
            'category_id' => 'required|integer',
            'published_at' => 'required|date',
            
        //klucevi iminjata na input
        ]);
        
        $image = Input::file('featured_image');
        $imageName = time().$image->getClientOriginalName();//da se smeni originalnoto ime i taka da se zacuva
        $image->move('uploads', $imageName);//da se premesti vo folder uploads
        
        $input = $request->all();
        $input['featured_image'] = $imageName;
        $input['user_id'] = \Auth::user()->id;//\Auth::user() vraka null(nema najaveno korisnik) dali ima najaven korisnik
        //od userot da go zememe id-to 
        Article::create($input);
        return redirect('articles');
    }
    
    public function edit($id){//dinamickoto id od route
        $article = Article::findOrFail($id);//find
        $categories = \App\Category::pluck('title', 'id');
        return view('articles.edit', [
            'article' => $article,
            'categories' => $categories
        ]);
        
    }
    
    function update($id, Request $request){
        $this->validate($request, [
            'title' => 'required|min:3',
            'body' => 'required',
            'excerpt' =>'required',
            'slug' => 'required|unique:articles,slug,'.$id,//bez space inaku dava greska
            'featured_image' => 'image',
            'category_id' => 'required|integer',
            'published_at' => 'required|date',
            
        //klucevi iminjata na input
        ]);
        
        $article = Article::findOrFail($id);//ako ne postoi javi 404
        
        $image = Input::file('featured_image');
        //new image chosen
        
        $input = $request->all();
        
        if(isset($image)){
            $imageName = time().$image->getClientOriginalName();
            $input['featured_image'] = $imageName;
            $image->move('uploads', $imageName);
            
            //delete the old image
            if(file_exists('uploads/'.$article->featured_image)){
                unlink('uploads/'.$article->featured_image);
            }
        }
        
        $article->update($input);
        return redirect('articles/'.$article->slug);
    }
    
    function view($slug){
        $article = Article::all()->where('slug', $slug)->first();//ne kolekcija samo eden objekt
        return view('articles.view',[ 'article' => $article]);
    }
}//vraka json api(vrakaat xml ili json standardi koi site jazici gi razbiraat) na localhost
//MassAssignmentException: ako se setiraat poveke propertija i da se smestat vo baza, formite se najranlivi,
//ne dava da se apdejtira se odednas