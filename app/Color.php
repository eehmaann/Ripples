<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Color extends Model
{
    //
     public static function rankedColors(){
     return Color::select('color', DB::raw('COUNT(color) as count'))
             ->orderBy('count', 'DESC')
            ->groupBy('color');
       
    }
}

