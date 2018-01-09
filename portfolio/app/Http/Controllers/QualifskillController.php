<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Qualification;
use App\Models\Skill;

class QualifskillController extends Controller
{
    public function index(){
    	$qualif = Qualification::all();
    	$skills = Skill::all();
    	return view('competences', compact('qualif','skills'));
    
    }
    
}