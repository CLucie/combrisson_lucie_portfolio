<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $primaryKey = 'id_message';
    protected $table	  = 'messages';
    public $timestamps	  = true;
    protected $fillable	  = ['id_message','name','email','subject','message'];
}
