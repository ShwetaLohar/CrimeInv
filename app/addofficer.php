<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class addofficer extends Model
{
     protected $fillable = ['username','password','area','address','mobile','email','select_file'];
}
