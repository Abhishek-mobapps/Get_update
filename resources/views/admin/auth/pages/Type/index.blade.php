{{-- @extends('admin.auth.dashboard')

@section('content')
<div class="container mt-4">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h6>Type List</h6>
            <a href="{{ route('admin.type.create') }}" class="btn btn-primary btn-sm">Add Type</a>
        </div>
        <div class="card-body">
            @include('admin.partials.flash')
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($types as $type)
                    <tr>
                        <td>{{ $type->name }}</td>
                        <td>{{ $type->status ? 'Active' : 'Inactive' }}</td>
                        <td>
                            <a href="{{ route('admin.type.edit', $type->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('admin.type.destroy', $type->id) }}" method="POST" style="display:inline-block;">
                                @csrf @method('DELETE')
                                <button class="btn btn-sm btn-danger" onclick="return confirm('Delete this type?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            {{ $types->links() }}
        </div>
    </div>
</div>
@endsection --}}
@extends('admin.auth.dashboard')

@section('content')
<div class="container mt-4">
    <h2>Type List</h2>

    <a href="{{ route('admin.type.create') }}" class="btn btn-primary mb-3">+ Add New Type</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                {{-- <th>Description</th> --}}
                <th>Status</th>
                <th>Created</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($types as $type)
                <tr>
                    <td>{{ $type->name }}</td>
                    {{-- <td>{{ $type->description ?? '-' }}</td> --}}
                    <td>
                        <span class="badge bg-{{ $type->status === 'active' ? 'success' : 'secondary' }}">
                            {{ ucfirst($type->status) }}
                        </span>
                    </td>
                    <td>{{ $type->created_at->diffForHumans() }}</td>
                    <td>
                        <a href="{{ route('admin.type.edit', $type->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('admin.type.destroy', $type->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete this type?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="5" class="text-center">No types found.</td></tr>
            @endforelse
        </tbody>
    </table>

    {{ $types->links() }}
</div>
@endsection
