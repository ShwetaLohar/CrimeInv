<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class result extends Model
{
    protected $fillable = ['result_id','case_id','susp_id','note']; 
} 
