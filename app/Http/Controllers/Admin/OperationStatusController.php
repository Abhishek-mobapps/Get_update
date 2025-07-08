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
        return view('admin.auth.pages.Operation_Status.index', compact('statuses'));
    }

    public function create()
    {
        return view('admin.auth.pages.Operation_Status.create');
    }

    public function store(Request $request)
    {
        $request->validate(['name' => 'required|unique:operation_statuses']);

        $this->service->create($request->only(['name', 'status']));
        return redirect()->route('admin.auth.pages.operation-status.index')->with('success', 'Operation status created.');
    }

    public function edit(OperationStatus $operation_status)
    {
        return view('admin.auth.pages.operation_status.edit', ['status' => $operation_status]);
    }

    public function update(Request $request, OperationStatus $operation_status)
    {
        $request->validate(['name' => 'required|unique:operation_statuses,name,' . $operation_status->id]);

        $this->service->update($operation_status, $request->only(['name', 'status']));
        return redirect()->route('admin.operation-status.index')->with('success', 'Updated.');
    }

    public function destroy(OperationStatus $operation_status)
    {
        $this->service->delete($operation_status);
        return back()->with('success', 'Deleted.');
    }

    public function toggleStatus(OperationStatus $operation_status)
    {
        $this->service->toggleStatus($operation_status);
        return back()->with('success', 'Status toggled.');
    }
}
