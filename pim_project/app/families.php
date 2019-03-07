<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class families extends Model
{
    public function set_attributes()
    {
        return $this->belongsToMany('App\attributes');
    }

    public function set_attribute_groups()
    {
        return $this->belongsToMany('App\attribute_groups');
    }
}
