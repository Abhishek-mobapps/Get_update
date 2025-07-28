<?php

namespace App\Http\Controllers\Admin;

use App\Models\Type;
use Illuminate\Http\Request;
use App\Services\TypeService;
use Illuminate\Routing\Controller as BaseController;

class TypeController extends BaseController
{
    protected $typeService;

    public function __construct(TypeService $typeService)
    {
        $this->middleware('auth:admin');
        $this->typeService = $typeService;
    }

    public function index()
    {
        $types = $this->typeService->paginated();
        return view('admin.auth.pages.type.index', compact('types'));
    }

    public function create()
    {
        return view('admin.auth.pages.type.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:191|unique:types,name',
            'name_it' => 'required|string|max:191|unique:types,name_it',
        ]);

        $this->typeService->create($request->only(['name', 'name_it', 'description', 'status']));

        return redirect()->route('admin.type.index')->with('success', 'Type created.');
    }

    public function edit(Type $type)
    {
        return view('admin.auth.pages.type.edit', compact('type'));
    }

    public function update(Request $request, Type $type)
    {
        $request->validate([
            'name'    => 'required|string|max:191|unique:types,name,' . $type->id,
            'name_it' => 'required|string|max:191|unique:types,name_it,' . $type->id,
        ]);

        $this->typeService->update($type, $request->only(['name', 'name_it', 'description', 'status']));

        return redirect()->route('admin.type.index')->with('success', 'Type updated.');
    }

    public function destroy(Type $type)
    {
        $this->typeService->delete($type);
        return back()->with('success', 'Type deleted.');
    }

    public function restore($id)
    {
        $this->typeService->restore($id);
        return back()->with('success', 'Type restored.');
    }

    public function toggleStatus(Type $type)
    {
        $this->typeService->toggleStatus($type);
        return back()->with('success', 'Type status updated.');
    }
}
