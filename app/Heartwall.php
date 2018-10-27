<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Heartwall extends Model
{
    //



    public function problem()
    {
        return $this->morphMany('App\Problem', 'describable');
    }
}
