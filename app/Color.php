<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Color extends Model
{
    //
     public static function rankedColors(){
     $colors =Color::select('color', DB::raw('COUNT(color) as count'))
             ->orderBy('count')
            ->groupBy('color')
            ->get(array('color'));
        return $colors;
    }
}

