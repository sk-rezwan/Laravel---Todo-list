<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class todo extends Model
{
    public function setTitleAttribute($value){
        $this->attributes['title'] = ucfirst($value);
    }
}
