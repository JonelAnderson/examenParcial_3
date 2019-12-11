<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profession extends Model
{
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
    public function attention(){
        return $this->belongsTo('App\Models\Attention');
    }
    public function service(){
        return $this->belongsTo('App\Models\Service');
    }
}
