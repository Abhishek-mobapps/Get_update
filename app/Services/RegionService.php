<?php

namespace App\Services;

use App\Models\Region;

class RegionService
{
    public function all() {
        return Region::orderBy('name')->get();
    }

    public function store($data) {
        return Region::create($data);
    }

    public function update(Region $region, $data) {
        return $region->update($data);
    }

    public function delete(Region $region) {
        return $region->delete();
    }

    public function restore($id) {
        return Region::withTrashed()->findOrFail($id)->restore();
    }

    public function forceDelete($id) {
        return Region::withTrashed()->findOrFail($id)->forceDelete();
    }
}
