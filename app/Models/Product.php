<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title', 'description', 'images', 'price', 'compare_at_price',
        'cost_per_price', 'star_points', 'product_type', 'vendor', 'collection', 'product_tags',
    ];

    protected $casts = [
        'images' => 'array',
        'price' => 'decimal:2',
        'compare_at_price' => 'decimal:2',
        'cost_per_price' => 'decimal:2',
        'star_points' => 'decimal:2',
    ];


    public function categories(){
         return $this->belongsToMany(Category::class);
    }
}
