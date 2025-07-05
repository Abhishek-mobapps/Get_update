<?php

namespace App\Services;
use Illuminate\Support\Str;
use App\Models\Category;

class CategoryService
{
    public function paginated($perPage = 10)
    {
        return Category::withoutTrashed()->latest()->paginate($perPage);
    }

    public function create(array $data)
    {
        return Category::create($data);
    }

    public function update(Category $category, array $data)
    {
        return $category->update($data);
    }

    public function delete(Category $category)
    {
        return $category->delete(); 
    }

    public function restore($id)
    {
        $category = Category::withTrashed()->findOrFail($id);
        return $category->restore();
    }
}
