<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\OperationStatus;
use App\Services\OperationStatusService;
use Illuminate\Routing\Controller as BaseController;

class OperationStatusController extends BaseController
{
    protected $service;

    public function __construct(OperationStatusService $service)
    {
        $this->middleware('auth:admin');
        $this->service = $service;
    }

    public function index()
    {
        $statuses = $this->service->paginated();
        return view('admin.auth.pages.operation_status.index', compact('statuses'));
    }

    public function create()
    {
        return view('admin.auth.pages.operation_status.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:191|unique:operation_statuses,name',
            'name_it' => 'required|string|max:191|unique:operation_statuses,name_it',
        ]);

        $this->service->create($request->only(['name', 'name_it', 'status']));

        return redirect()->route('admin.operation-status.index')->with('success', 'Operation status created.');
    }

    public function edit(OperationStatus $operation_status)
    {
        return view('admin.auth.pages.operation_status.edit', ['status' => $operation_status]);
    }

    public function update(Request $request, OperationStatus $operation_status)
    {
        $request->validate([
            'name'    => 'required|string|max:191|unique:operation_statuses,name,' . $operation_status->id,
            'name_it' => 'required|string|max:191|unique:operation_statuses,name_it,' . $operation_status->id,
        ]);

        $this->service->update($operation_status, $request->only(['name', 'name_it', 'status']));

        return redirect()->route('admin.operation-status.index')->with('success', 'Operation status updated.');
    }

    public function destroy(OperationStatus $operation_status)
    {
        $this->service->delete($operation_status);
        return back()->with('success', 'Operation status deleted.');
    }

    public function toggleStatus(OperationStatus $operation_status)
    {
        $this->service->toggleStatus($operation_status);
        return back()->with('success', 'Operation status toggled.');
    }
}
