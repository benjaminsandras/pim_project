<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class attributes extends Model
{
    public function set_family()
    {
        return $this->belongsToMany('App\families');
    }
}
