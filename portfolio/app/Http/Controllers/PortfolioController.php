<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class PortfolioController extends Controller
{
    public function index(){
    	$projets = Project::all();
    	return view('portfolio', compact('projets'));
    }

    public function admin(){
    	$projets = Project::all();
    	return view('admin/adminprojets', compact('projets'));
    }

    public function destroy(){
        $supp = Project::where("id_projet", "=" , $_GET['id'])->delete();
        return redirect('admin/projets') -> with('success','Article deleted successfully');
    }

    public function edit()
    {
        $id = $_GET['id'];
        $edit = Project::where("id_projet", "=" , $id)->get();
        return view('admin/edit/admineditprojets',compact('edit', 'id'));
    }

    public function update(Request $request){
        $id = $request->id;
        $update = Project::where('id_projet', '=', $id )->update(array('src' => $request->src, 'alt' => $request->alt, 'title' => $request->title, 'description' => $request->description));

        return redirect('admin/projets')->with('success','Article updated successfully');
    }
    
}
