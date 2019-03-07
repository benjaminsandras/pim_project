<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class attribute_groups extends Model
{
    public function set_family()
    {
        return $this->belongsToMany('App\families');
    }
}
