<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbl_customer extends Model
{
    protected $fillable = [
        'CustomerName', 'City', 'Address', 'PostalCode','Country'
    ];
}





