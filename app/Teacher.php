<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
     protected $fillable = [
        'name','prenom','cin','naissance','adresse','telephone','email','institut_origin','diplome','annee_id','institut_id'
    ];

public function Institut(){

       return $this->belongsTo('App\Institut');

   }
}
