<?php
namespace App\Services;

use App\Models\OperationStatus;

class OperationStatusService
{
    public function paginated($perPage = 10)
    {
        return OperationStatus::latest()->paginate($perPage);
    }

    public function create(array $data)
    {
        return OperationStatus::create($data);
    }

    public function update(OperationStatus $status, array $data)
    {
        return $status->update($data);
    }

    public function delete(OperationStatus $status)
    {
        return $status->delete();
    }

    public function toggleStatus(OperationStatus $status)
    {
        $status->status = $status->status === 'active' ? 'inactive' : 'active';
        $status->save();
    }
}
