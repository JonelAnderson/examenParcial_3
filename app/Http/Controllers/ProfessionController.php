<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profession;

class ProfessionController extends Controller
{
    public function list(){
        $professions = Profession::all();
        return view('professions',['professions'=>$professions]);
    }
}
