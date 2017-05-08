<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
  //  protected $fillable = [//sto dozvoluvame da se popolni
      //  'title',
     //   'body',
     //   'slug'
   // ];
    
    protected $guarded = [
        'id'
    ];
    
    public function author(){
        return $this->belongsTo('\App\User', 'user_id');//da se sprecificira koja kolona e (user_id)
    }
    
    public function tags(){
       return $this->belongsToMany('\App\Tag', 'articles_tags', 'article_id');
    }
    
    public function getTagAttribute(){//ako nema def properti vo article gore
        //return [1,2,3];//ke gi selektira od tags vo edit
        return $this->tags()->pluck('id')->toArray();//vraka relacijata pluck id dobivame edna niza kade gi imam onie koi se naznaeni na toj article
        //od edit 'tag' //mora to array oti e kolekcija pa da bide vo obicen array
        //ili koga ima query toa e kolekcija od objekti za da bide vo ednostavna niza mora to array
    }
}
