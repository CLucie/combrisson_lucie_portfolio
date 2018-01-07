<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class ContactController extends Controller
{
    public function index(){
    	$contacts = Message::all();
    	return view('contact', compact('contacts'));
    }

    public function admin(){
    	$messages = Message::all();
    	return view('admin/adminmessages', compact('messages'));
    }

    // public function delete(){
    // 	$messages = Message::all();
    // 	return view('adminmessages')->with('message', 'Le message à bien été supprimée.');
    // }

}
