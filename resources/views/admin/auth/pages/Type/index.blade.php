@extends('admin.auth.dashboard')

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
@endsection
