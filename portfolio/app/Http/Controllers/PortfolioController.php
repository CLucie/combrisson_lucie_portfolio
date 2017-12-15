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
}
