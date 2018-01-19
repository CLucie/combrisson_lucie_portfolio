<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Session;

class HomePageController extends Controller
{
    public function index(){
    	$me = User::find(1);
    	return view('homepage', compact('me'));
    }

    public function mentionslegales()
    {
        return view('mentionslegales');
    }
}
