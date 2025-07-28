<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OperationStatus extends Model
{
    protected $fillable = ['name', 'name_it' , 'status'];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
