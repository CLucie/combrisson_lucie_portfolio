<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Qualification;

class QualifController extends Controller
{
    public function admin(){
    	$qualif = Qualification::all();
    	return view('admin/adminqualifications', compact('qualif'));
    }
}
