<?php

namespace App\Http\Controllers\Admin;

// use App\Http\Controllers\Controller;
use App\Models\Sector;
use Illuminate\Http\Request;
use App\Services\SectorService;
use Illuminate\Routing\Controller as BaseController;

class SectorController extends BaseController
{
    protected $service;

    public function __construct(SectorService $service)
    {
        $this->middleware('auth:admin');
        $this->service = $service;
    }

    public function index()
    {
    $sectors = $this->service->paginated();
    return view('admin.auth.pages.sectors.index', compact('sectors'));
    }


    public function create()
    {
        return view('admin.auth.pages.sectors.create');
    }

    public function store(Request $request)
    {
        $request->validate(['name' => 'required|string|max:191']);
        $this->service->store($request->all());
        return redirect()->route('admin.sectors.index')->with('success', 'Sector created');
    }

    public function edit(Sector $sector)
    {
        return view('admin.auth.pages.sectors.edit', compact('sector'));
    }

    public function update(Request $request, Sector $sector)
    {
        $request->validate(['name' => 'required|string|max:191']);
        $this->service->update($sector, $request->all());
        return redirect()->route('admin.sectors.index')->with('success', 'Sector updated');
    }

    public function destroy(Sector $sector)
    {
        $this->service->delete($sector);
        return back()->with('success', 'Sector deleted');
    }

    public function restore($id)
    {
        $this->service->restore($id);
        return back()->with('success', 'Sector restored');
    }

    public function forceDelete($id)
    {
        $this->service->forceDelete($id);
        return back()->with('success', 'Sector permanently deleted');
    }
}
