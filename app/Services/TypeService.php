<?php
namespace App\Services;

use App\Models\Type;

class TypeService
{
    public function paginated($perPage = 7)
    {
        return Type::withoutTrashed()->latest()->paginate($perPage);
    }

    public function create(array $data)
    {
        return Type::create($data);
    }

    public function update(Type $type, array $data)
    {
        return $type->update($data);
    }

    public function delete(Type $type)
    {
        return $type->delete();
    }

    public function restore($id)
    {
        $type = Type::withTrashed()->findOrFail($id);
        return $type->restore();
    }

    public function toggleStatus(Type $type)
    {
        $type->status = $type->status === 'active' ? 'inactive' : 'active';
        $type->save();
    }
}
