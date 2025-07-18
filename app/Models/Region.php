<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Region extends Model
{
    use SoftDeletes;

    protected $fillable = ['name', 'is_active'];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
