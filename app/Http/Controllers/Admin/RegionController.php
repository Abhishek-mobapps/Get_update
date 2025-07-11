<?php

namespace App\Http\Controllers\Admin;

// use App\Http\Controllers\Controller;
use App\Models\Nation;
use Illuminate\Http\Request;
use App\Services\NationService;
use Illuminate\Routing\Controller as BaseController;

class NationController extends BaseController
{
    protected $service;

    public function __construct(RegionService $service)
    {
        $this->middleware('auth:admin');
        $this->service = $service;
    }

    public function index()
    {
        return view('admin.region.index', ['regions' => $this->service->all()]);
    }

    public function create()
    {
        return view('admin.regions.create');
    }

    public function store(Request $request)
    {
        $request->validate(['name' => 'required|string|max:191']);
        $this->service->store($request->all());
        return redirect()->route('admin.region.index')->with('success', 'Region created');
    }

    public function edit(Region $region)
    {
        return view('admin.region.edit', compact('region'));
    }

    public function update(Request $request, Region $region)
    {
        $request->validate(['name' => 'required|string|max:191']);
        $this->service->update($nation, $request->all());
        return redirect()->route('admin.regoions.index')->with('success', 'Region updated');
    }

    public function destroy(Region $region)
    {
        $this->service->delete($region);
        return back()->with('success', 'Nation soft deleted');
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
