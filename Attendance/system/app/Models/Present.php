<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Present extends Model
{
    protected $fillable=[
      'check_in','check_out','present_hours','check_in_method','check_out_method'
    ];
}
