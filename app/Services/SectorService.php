<?php

namespace App\Services;

use App\Models\Sector;

class SectorService
{
    public function all() {
        return Sector::orderBy('name')->get();
    }

    public function store($data) {
        return Sector::create($data);
    }

    public function update(Sector $sector, $data) {
        return $sector->update($data);
    }

    public function delete(Sector $sector) {
        return $sector->delete();
    }

    public function restore($id) {
        return Sector::withTrashed()->findOrFail($id)->restore();
    }

    public function forceDelete($id) {
        return Region::withTrashed()->findOrFail($id)->forceDelete();
    }
}
