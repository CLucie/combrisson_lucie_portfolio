<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;

class SkillsController extends Controller
{
    public function admin(){
    	$skills = Skill::all();
    	return view('admin/adminskills', compact('skills'));
    }

    // public function add(){
    // 	$skills = Skill::all();
    // 	return view('adminskills', compact('skills'));
    // }

    public function update(){
    	$skills = Skill::all();
    	return view('admin/edit/admineditskills');
    }

    // public function delete($id){
    // 	$skills = Skill::all();
    // 	return view('adminskills')->with('message', 'La compétence à bien été supprimée.');
    // }
}