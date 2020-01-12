<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class addcase extends Model
{
     protected $fillable = ['case_id','name','officer_id','officer_name','note']; 
}
