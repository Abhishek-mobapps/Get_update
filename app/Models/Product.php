<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title', 'description', 'images', 'price', 'buy_sell',
        'category_id', 'type_id', 'operation_status_id',
        'reference_code','operation_code','nation','region','sector','type_of_system',
    ];

    // protected $casts = [
    //     'images' => 'array',
    // ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function operationStatus()
    {
        return $this->belongsTo(OperationStatus::class);
    }

    public function Nation()
    {
        return $this->belongsTo(Nation::class);
    }

    public function Region()
    {
        return $this->belongsTo(Region::class);
    }
}
