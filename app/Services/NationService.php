<?php

namespace App\Services;

use App\Models\Nation;

class NationService
{
    public function all() {
        return Nation::orderBy('name')->get();
    }

    public function store($data) {
        return Nation::create($data);
    }

    public function update(Nation $nation, $data) {
        return $nation->update($data);
    }

    public function delete(Nation $nation) {
        return $nation->delete();
    }

    public function restore($id) {
        return Nation::withTrashed()->findOrFail($id)->restore();
    }

    public function forceDelete($id) {
        return Nation::withTrashed()->findOrFail($id)->forceDelete();
    }
}
