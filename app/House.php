<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    //

    protected $fillable = [
        'name_product', 'description', 'type','rooms','tags',
    ];


}
