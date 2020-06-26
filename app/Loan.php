<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class loan extends Model
{
    protected $fillable = [
        'client','quantity','pays','share','total_to_pay','date_mini','date_expiration',
    ];
}
