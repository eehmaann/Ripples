<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Emotion;

class Emotion extends Model
{
   

   // public static function getForCheckboxes() {
     //   $emotions = self::get();
       // $emotions_for_checkboxes = [];

        //foreach ($emotions as $emotion) {
          //  $emotions_for_checkboxes[$emotion['id']] = $emotion->col_name->row_name->name;
        //}

        //return $emotions_for_checkboxes;
    //}

    public function problems() {
        return $this->belongsToMany('App\Problem')->withTimestamps();
    }
}