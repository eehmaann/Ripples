<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Emotion;

class Emotion extends Model
{
   

    public static function getForCheckboxes() {
        $emotions = self::get();

        $emotionsForCheckboxes = [];

        foreach ($emotions as $emotion) {
            $emotionsForCheckboxes[$emotion['id']] = $emotion->name;
        }

        return $emotionsForCheckboxes;
    }

    public function problems() {
        return $this->belongsToMany('App\Problem')->withTimestamps();
    }
}
