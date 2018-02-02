<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Qualification extends Model
{
    protected $primaryKey = 'id_qualification';
    protected $table 	  = 'qualifications';
    public $timestamps 	  = true;
    protected $fillable   = ['id_qualification','id','start_date','end_date','diploma','establishment','zip_code','city'];
}
