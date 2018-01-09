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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(){
        $supp = Skill::where("id_skill", "=" , $_GET['id'])->delete();
        return redirect('admin/competences') -> with('success','Article deleted successfully');
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

        return redirect('admin/competences')->with('success','Article updated successfully');
    }
}