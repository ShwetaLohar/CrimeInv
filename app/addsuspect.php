<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class addsuspect extends Model
{
    protected $fillable = ['case_id','suspect','mobile','address','relation','note','upload_file'];

}
