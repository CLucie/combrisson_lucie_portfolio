<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminConnexionController extends Controller
{
    public function index(){
    	return view('admin/adminconnexion');
    }
}