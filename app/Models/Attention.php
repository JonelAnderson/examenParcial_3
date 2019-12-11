<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attention extends Model
{
    public function professions(){
        return $this->hasMany('App\Models\Profession');
    }
}
