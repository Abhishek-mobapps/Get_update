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
        return view('admin.auth.pages.Type.index', compact('types'));
    }

    public function create()
    {
        return view('admin.auth.pages.Type.create');
    }

    public function store(Request $request)
    {
        $request->validate(['name' => 'required|string|unique:types']);

        $this->typeService->create($request->only(['name', 'description', 'status']));
        return redirect()->route('admin.type.index')->with('success', 'Type created.');
    }

    public function edit(Type $type)
    {
        return view('admin.auth.pages.Type.edit', compact('type'));
    }

    public function update(Request $request, Type $type)
    {
        $request->validate(['name' => 'required|string|unique:types,name,' . $type->id]);

        $this->typeService->update($type, $request->only(['name', 'description', 'status']));
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
