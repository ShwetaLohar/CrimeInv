<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class predictresult extends Model
{
   protected $fillable = ['case_id','suspect','point'];
}
