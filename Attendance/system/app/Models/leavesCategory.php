<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class leavesCategory extends Model
{
    protected $table = 'leavescategory';

    protected $fillable =[
        'category_name'
    ];
}
