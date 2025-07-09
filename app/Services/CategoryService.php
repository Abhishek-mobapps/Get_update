<?php

namespace App\Services;

use App\Models\Category;

class CategoryService
{
    public function paginated($perPage = 7)
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

    public function toggleStatus(Category $category)
    {
        $category->status = $category->status === 'active' ? 'inactive' : 'active';
        $category->save();
    }
}
