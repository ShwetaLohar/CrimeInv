<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class officer extends Model
{
    protected $fillable = ['case_id','name','officer_id','officer_name']; 
}
