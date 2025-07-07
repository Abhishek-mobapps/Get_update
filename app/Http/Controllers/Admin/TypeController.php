<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Type;
use App\Services\TypeService;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    protected $service;

    public function __construct(TypeService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $types = $this->service->paginated();
        return view('admin.type.index', compact('types'));
    }

    public function create()
    {
        return view('admin.type.create');
    }

    public function store(Request $request)
    {
        $request->validate(['name' => 'required|string|max:255']);
        $this->service->create($request->all());
        return redirect()->route('admin.type.index')->with('success', 'Type created successfully.');
    }

    public function edit(Type $type)
    {
        return view('admin.type.edit', compact('type'));
    }

    public function update(Request $request, Type $type)
    {
        $request->validate(['name' => 'required|string|max:255']);
        $this->service->update($type, $request->all());
        return redirect()->route('admin.type.index')->with('success', 'Type updated successfully.');
    }

    public function destroy(Type $type)
    {
        $this->service->delete($type);
        return redirect()->route('admin.type.index')->with('success', 'Type deleted successfully.');
    }

    public function restore($id)
    {
        $this->service->restore($id);
        return redirect()->route('admin.type.index')->with('success', 'Type restored successfully.');
    }
}
