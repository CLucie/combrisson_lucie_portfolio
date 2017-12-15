<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Qualification;

class QualifController extends Controller
{
    public function index(){
    	return view('competences');
    }
}
