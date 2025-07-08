@extends('admin.auth.dashboard')

@section('content')
<div class="container mt-4">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h6>Operation Status List</h6>
            <a href="{{ route('admin.operation-status.create') }}" class="btn btn-sm btn-success">+ Add</a>
        </div>

        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <table class="table table-hover text-center">
                <thead class="table-light">
                    <tr>
                        <th>Name</th>
                        <th>Status</th>
                        <th>Created</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($statuses as $status)
                        <tr>
                            <td>{{ $status->name }}</td>
                            <td>
                                <form method="POST" action="{{ route('admin.operation-status.toggleStatus', $status) }}">
                                    @csrf
                                    <button type="submit" class="btn btn-sm {{ $status->status == 'active' ? 'btn-success' : 'btn-secondary' }}">
                                        {{ ucfirst($status->status) }}
                                    </button>
                                </form>
                            </td>
                            <td>{{ $status->created_at->format('d M Y') }}</td>
                            <td>
                                <a href="{{ route('admin.operation-status.edit', $status) }}" class="btn btn-sm btn-primary">Edit</a>
                                <form action="{{ route('admin.operation-status.destroy', $status) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete this?')">
                                    @csrf @method('DELETE')
                                    <button class="btn btn-sm btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr><td colspan="4" class="text-muted">No operation statuses found.</td></tr>
                    @endforelse
                </tbody>
            </table>

            {{ $statuses->links() }}
        </div>
    </div>
</div>
@endsection
