<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Emploit extends Model
{
     protected $fillable = [
        'classe','color','teacher_id','class_id', 'start', 'end','day'
    ];
}
