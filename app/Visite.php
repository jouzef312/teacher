<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visite extends Model
{
 protected $fillable = [
        'name', 'date' , 'institut_id','teacher_id'
    ];
}
