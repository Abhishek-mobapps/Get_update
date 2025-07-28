<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sector extends Model
{
    use SoftDeletes;

    protected $fillable = ['name','name_it', 'is_active'];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
