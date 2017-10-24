<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{

    protected $fillable = [
        'company_name','logo','address','phone_no','facebook_link','privacy','weekend','attendance_method','field_tracking','terms_condition'
    ];


}
