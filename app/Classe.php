<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    //
     protected $fillable = [
        'name', 'section-id' , 'level_id'
    ];



     public function Sections()
    {
        //
        return $this->belongsTo('App\Section');
    }


     public function Levels()
    {
        //
        return $this->belongsTo('App\Level');
    }
}
