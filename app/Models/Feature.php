<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    protected $fillable=[
        'value',
        'description',
        'option_id'
    ];

    // Relación uno a muchos inversa
    public function option(){
        return $this->belongsTo(Option::class); 
    }

    // Relación muchos a muchos
    public function variants(){
        return $this->belongsToMany(Variant::class)->withTimestamps();
    }
}
