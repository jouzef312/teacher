<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
     protected $fillable = [
        'name', 'date' , 'institut_id','teacher_id'
    ];
}
