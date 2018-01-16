<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Qualification;
use App\Http\Requests\QualificationRequest;

class QualifController extends Controller
{
    public function admin(){
    	$qualif = Qualification::all();
    	return view('admin/adminqualifications', compact('qualif'));
    }

    public function destroy(){
        $supp = Qualification::where("id_qualification", "=" , $_GET['id'])->delete();
        return redirect('admin/qualifications') -> with('success','Article deleted successfully');
    }

    public function edit()
    {
        $id = $_GET['id'];
        $edit = Qualification::where("id_qualification", "=" , $id)->get();
        return view('admin/edit/admineditqualification',compact('edit', 'id'));
    }

    public function update(Request $request){
        $id = $request->id;
        $update = Qualification::where('id_qualification', '=', $id )->update(array('start_date' => $request->start_date, 'end_date' => $request->end_date, 'diploma' => $request->diploma, 'establishment' => $request->establishment, 'zip_code' => $request->zip_code, 'city' => $request->city));

        return redirect('admin/qualifications')->with('success','Article updated successfully');
    }

    public function create()
    {
        return view('admin/add/adminaddqualification');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'start_date' => 'required',
            'end_date' => 'required',
            'diploma' => 'required',
            'establishment' => 'required',
        ]);

        $input = $request->all();

        Qualification::create($input);

        return redirect()->route('adqualification')->with('success','Article created successfully');
    }
}
