<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Session;

class AdminConnexionController extends Controller
{
    public function index(){
    	return view('admin/adminconnexion');
    }

    public function log(User $request){
		$mail = User::where('email', '=', $request->email)->get();
		$name = $mail[0]->name;
			if ($mail[0]->password == $request->password){
				Session::put('name', $name);
				return redirect()->route('admessages');
			}else{
				return view('homepage');
			}
    }
}