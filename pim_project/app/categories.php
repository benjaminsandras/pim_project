<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    public function set_products()
    {
        return $this->belongsToMany('App\products');
    }
}
