@extends('admin.auth.dashboard') {{-- or your layout --}}

@section('content')
<div class="container mt-4">
    <h2>Admin Users Activities</h2>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Created At</th>
                <th>Last Updated</th>
            </tr>
        </thead>
        <tbody>
            @forelse($admins as $index => $admin)
            <tr>
                <td>{{ $admins->firstItem() + $index }}</td> {{-- Pagination-aware index --}}
                <td>{{ $admin->name }}</td>
                <td>{{ $admin->email }}</td>
                <td>{{ $admin->created_at->format('d M Y, h:i A') }}</td>
                <td>{{ $admin->updated_at->format('d M Y, h:i A') }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="text-center">No admin users found.</td>
            </tr>
            @endforelse
        </tbody>
    </table>

    {{-- Pagination links --}}
    {{ $admins->links() }}
</div>
@endsection
