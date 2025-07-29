<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Parcel extends Model
{
    protected $fillable =[
            'address_dep',
            'address_arr',
            'weight',
            'tracking_number',
            'status'
    ];
}
