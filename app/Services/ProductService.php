<?php
namespace App\Services;

use App\Models\Product;

class ProductService
{
    public function paginated($perPage = 7)
    {
        return Product::with(['category', 'type', 'operationStatus'])
                     ->latest()
                     ->paginate($perPage);
    }
    public function create(array $data)
    {
        if (isset($data['images']) && is_array($data['images'])) {
            $data['images'] = json_encode($data['images']);
        }
        return Product::create($data);
    }

    public function update(Product $product, array $data)
    {
        if (isset($data['images']) && is_array($data['images'])) {
            $data['images'] = json_encode($data['images']);
        }
        return $product->update($data);
    }

    public function delete(Product $product)
    {
        return $product->delete();
    }
}
