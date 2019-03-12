<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    protected $fillable = [
        'name', 
    ];


      public function sections()
    {
        //
 return $this->belongsToMany('App\Section');    
}  
       public function Classe()
    {
        //
        return $this->hasMany('App\Classe');
    }
}
