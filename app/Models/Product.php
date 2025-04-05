<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=[
        'sku',
        'name',
        'description',
        'image_path',
        'price',
        'stock',
        'subcategory_id'
    ];

    // Relación muchos a uno
    public function subcategory(){
        return $this->belongsTo(Subcategory::class);
    }

    // Relación uno a muchos
    public function variants(){
        return $this->hasMany(Variant::class);
    }

    // Relación muchos a muchos
    public function options(){
        return $this->belongsToMany(Option::class)->using(OptionProduct::class)->withPivot('features')->withTimestamps();
    }
}
