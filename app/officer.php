<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Officer extends Model
{
    protected $fillable = ['officer_id','officer_name','area','address','mobile','email','image'];
}
