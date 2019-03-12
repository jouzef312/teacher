<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
     protected $fillable = [
        'name', 
    ];


    public function Levels()
    {
        //
        return $this->belongsToMany('App\Level');
    }


        public function Classe()
    {
        //
        return $this->hasMany('App\Classe');
    }
}
