<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institut extends Model
{
      protected $fillable = [
        'name','file','adresse','telephone','email','site','fax'
    ];

    public function Teacher()
   {
       return $this->hasMany('App\Teacher');
   }
}
