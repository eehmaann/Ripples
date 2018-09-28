<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Emotion;

class Emotion extends Model
{
      public static function getForSelection() {
    	
        $emotions = Emotion::get();
        $emotions_for_list = [];
        foreach($emotionss as $emotion) {
            $emotions_for_list[$emotion->id] = $emotion->name;
        }
        return $emotions_for_list;
    }
    //
}
