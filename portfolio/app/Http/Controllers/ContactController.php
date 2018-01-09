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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(){
        $supp = Message::where("id_message", "=" , $_GET['id'])->delete();
        return redirect('admin/messages') -> with('success','Article deleted successfully');
    }

}
