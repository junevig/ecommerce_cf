<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OptionProduct extends Model
{
    protected $casts = [
        'features' => 'array'
    ];
}
