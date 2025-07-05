<?php

namespace App\Services;

use App\Models\Category;

class CategoryService
{
    public function all()
    {
        return Category::withTrashed()->latest()->get();
    }

    public function paginated($perPage = 10)
    {
        return Category::withTrashed()->latest()->paginate($perPage);
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

    public function restore(int $id)
    {
        $category = Category::onlyTrashed()->findOrFail($id);
        return $category->restore();
    }
}
