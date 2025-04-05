<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Variant extends Model
{
    protected $fillable = [
        'sku',
        'image_path',
        'stock',
        'product_id'
    ];

    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn() => $this->image_path ? Storage::url($this->image_path) : asset('img/no_image.jpg')
        );
    }

    // Relación muchos a uno
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    // Relación muchos a muchos
    public function features()
    {
        return $this->belongsToMany(Feature::class)->withTimestamps();
    }
}
