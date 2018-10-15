<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Locator extends Model
{
    //
     public function diagnosis()
    {
        return $this->hasMany('App\Diagnosis');
    }
}
