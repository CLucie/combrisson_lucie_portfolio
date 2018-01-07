<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $primaryKey = 'id_projet';
    protected $table = 'projects';
    public $timestamps = true;
    protected $fillable = ['id_projet','id','src','alt','title','description'];
}
