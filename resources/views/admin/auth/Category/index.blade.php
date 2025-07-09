@extends('admin.auth.dashboard')

@section('content')
<div class="container mt-4">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h6>Category List</h6>
            <a href="{{ route('admin.category.create') }}" class="btn btn-sm btn-success">+ Add</a>
        </div>
        <div class="card-body">
                        @if(session('success'))
    <div id="flash-message" class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>

    <script>
        // Auto-fade after 3 seconds
        setTimeout(() => {
            let alert = document.getElementById('flash-message');
            if (alert) {
                alert.style.transition = "opacity 0.5s ease-out";
                alert.style.opacity = "0";

                // Remove completely after fade
                setTimeout(() => alert.remove(), 500);
            }
        }, 3000); // 3 seconds
    </script>
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

                    @forelse ($categories as $category)
                        <tr>
                            <td>{{ $category->name }}</td>
                            <td>
                        <form method="POST" action="{{ route('admin.category.toggleStatus', $category) }}">
                            @csrf
                            <button type="submit" class="btn btn-sm {{ $category->status == 'active' ? 'btn-success' : 'btn-secondary' }}">
                                {{ ucfirst($category->status) }}
                            </button>
                        </form>
                          </td>
                            <td>{{ $category->created_at->format('d M Y') }}</td>
                            <td>
                                <a href="{{ route('admin.category.edit', $category) }}" class="btn btn-sm btn-primary">Edit</a>
                                <form action="{{ route('admin.category.destroy', $category) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete this?')">
                                    @csrf @method('DELETE')
                                    <button class="btn btn-sm btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr><td colspan="4" class="text-muted">No categories found.</td></tr>
                    @endforelse
                </tbody>
            </table>

            <div class="d-flex justify-content-center mt-4">
    {{ $categories->links('pagination::bootstrap-5') }}
</div>
        </div>
    </div>
</div>
@endsection
