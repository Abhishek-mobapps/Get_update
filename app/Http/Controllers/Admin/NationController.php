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

    public function __construct(NationService $service)
    {
        $this->middleware('auth:admin');
        $this->service = $service;
    }

    public function index()
    {
        return view('admin.auth.pages.nations.index', ['nations' => $this->service->all()]);
    }

    public function create()
    {
        return view('admin.auth.pages.nations.create');
    }

    public function store(Request $request)
    {
        $request->validate(['name' => 'required|string|max:191']);
        $this->service->store($request->all());
        return redirect()->route('admin.nations.index')->with('success', 'Nation created');
    }

    public function edit(Nation $nation)
    {
        return view('admin.auth.pages.nations.edit', compact('nation'));
    }

    public function update(Request $request, Nation $nation)
    {
        $request->validate(['name' => 'required|string|max:191']);
        $this->service->update($nation, $request->all());
        return redirect()->route('admin.nations.index')->with('success', 'Nation updated');
    }

    public function destroy(Nation $nation)
    {
        $this->service->delete($nation);
        return back()->with('success', 'Nation soft deleted');
    }

    public function restore($id)
    {
        $this->service->restore($id);
        return back()->with('success', 'Nation restored');
    }

    public function forceDelete($id)
    {
        $this->service->forceDelete($id);
        return back()->with('success', 'Nation permanently deleted');
    }
}
