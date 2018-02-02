<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $primaryKey = 'id_skill';
    protected $table 	  = 'skills';
    public $timestamps 	  = true;
    protected $fillable	  = ['id_skill','id','name','level','percentage','logo'];
}
