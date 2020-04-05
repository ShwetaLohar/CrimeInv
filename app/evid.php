<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class evid extends Model
{
    protected $fillable = ['evidence','suspect','note','physical','logical','case_id'];

}
