<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;
use Session;

class SkillsController extends Controller
{
    public function admin(){
    	$skills = Skill::all();
    	return view('admin/adminskills', compact('skills'));
    }

    public function destroy(){
        $supp = Skill::where("id_skill", "=" , $_GET['id'])->delete();
        return redirect('admin/competences') -> with('success','La compétence a bien été supprimée.');
    }

    public function edit()
    {
        $id = $_GET['id'];
        $edit = Skill::where("id_skill", "=" , $id)->get();
        return view('admin/edit/admineditskills',compact('edit', 'id'));
    }

    public function update(Request $request){
        $id = $request->id;
        $update = Skill::where('id_skill', '=', $id )->update(array('name' => $request->name, 'percentage' => $request->percentage, 'logo' => $request->logo));

        return redirect('admin/competences')->with('success','La compétence a bien été mise à jour.');
    }

    public function create()
    {
        return view('admin/add/adminaddskills');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'level' => 'required',
            'percentage' => 'required',
        ]);

        $input = $request->all();

        Skill::create($input);

        return redirect()->route('adskills')->with('success','La compétence a bien été créée.');
    }
}