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
}
