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

    public function destroy(){
        $supp = Message::where("id_message", "=" , $_GET['id'])->delete();
        return redirect('admin/messages') -> with('success','Article deleted successfully');
    }

    public function send(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required'
        ]);

        $input = $request->all();

        Message::create($input);

        // Mail::to('lucie.combrisson@laposte.net')->send(new classMailContact($form));

        return redirect()->route('contact')->with('success','Votre message à bien été envoyé');
    }

}
