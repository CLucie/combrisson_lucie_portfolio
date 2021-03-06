<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    
    public $contact; 

    
    public function __construct($contact)
    {
        $this->contact = $contact;
    }

    public function build()
    {
        return $this->from('lucie.combrisson@laposte.net')->view('email', compact('contact'));
    }
}
