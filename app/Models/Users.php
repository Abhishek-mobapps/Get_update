<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    public function savedProducts()
{
    return $this->belongsToMany(Product::class, 'saved_products')->withTimestamps();
}

public function requestedProducts()
{
    return $this->belongsToMany(Product::class, 'product_requests')->withTimestamps();
}

}
