<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    protected $fillable = ['name', 'description', 'status'];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    protected $casts = [
    'name' => 'array',
];

public function getNameEnAttribute()
{
    return $this->name['en'] ?? null;
}

public function getNameItAttribute()
{
    return $this->name['it'] ?? null;
}

}
