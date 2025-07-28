<?php

namespace App\Http\Controllers\Admin;

use App\Models\Region;
use Illuminate\Http\Request;
use App\Services\RegionService;
use Illuminate\Routing\Controller as BaseController;

class RegionController extends BaseController
{
    protected $service;

    public function __construct(RegionService $service)
    {
        $this->middleware('auth:admin');
        $this->service = $service;
    }

    public function index()
    {
        $regions = $this->service->paginated();
        return view('admin.auth.pages.regions.index', compact('regions'));
    }

    public function create()
    {
        return view('admin.auth.pages.regions.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:191|unique:regions,name',
            'name_it' => 'required|string|max:191|unique:regions,name_it',
        ]);

        $this->service->store($request->all());

        return redirect()->route('admin.regions.index')->with('success', 'Region created');
    }

    public function edit(Region $region)
    {
        return view('admin.auth.pages.regions.edit', compact('region'));
    }

    public function update(Request $request, Region $region)
    {
        $request->validate([
            'name'    => 'required|string|max:191|unique:regions,name,' . $region->id,
            'name_it' => 'required|string|max:191|unique:regions,name_it,' . $region->id,
        ]);

        $this->service->update($region, $request->all());

        return redirect()->route('admin.regions.index')->with('success', 'Region updated');
    }

    public function destroy(Region $region)
    {
        $this->service->delete($region);
        return back()->with('success', 'Region soft deleted');
    }

    public function restore($id)
    {
        $this->service->restore($id);
        return back()->with('success', 'Region restored');
    }

    public function forceDelete($id)
    {
        $this->service->forceDelete($id);
        return back()->with('success', 'Region permanently deleted');
    }
}
