<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Type extends Model
{
    use SoftDeletes;

    protected $fillable = ['name', 'name_it' , 'description', 'status'];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    protected $casts = [
    'name' => 'array',
];

}
