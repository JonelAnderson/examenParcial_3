<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public function professions(){
        return $this->hasMany('App\Models\Profession');
    }
}
