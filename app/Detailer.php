<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detailer extends Model
{
    //
     public function diagnosis()
    {
        return $this->belongsTo('App\Diagnosis');
    }
}
