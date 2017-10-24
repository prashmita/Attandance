<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Leave extends Model
{
    protected $fillable=[
        'user_id ','category_id','start_date','end_date','status','validated_by','reason'
    ];
}
