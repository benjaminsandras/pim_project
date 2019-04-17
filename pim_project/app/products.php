<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    public function set_categories()
    {
        return $this->belongsToMany('App\categories');
    }
}
