<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    //
    protected $fillable = [
        'name', 'ad_type', 'prop_type', 'size', 'bed', 'bath', 'additional_info', 'address_address', 'address_latitude', 'address_longitude', 'filenames', 'price'
    ];
}
