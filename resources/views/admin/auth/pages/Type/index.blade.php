@extends('admin.auth.dashboard')

@section('content')

    <div class="container mt-4">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h6>Type List</h6>
                <a href="{{ route('admin.type.create') }}" class="btn btn-sm btn-success">+ Add</a>
            </div>
            <div class="card-body">
                @if (session('success'))
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
                        @forelse ($types as $type)
                            <tr>
                                <td>{{ $type->name }}</td>
                                <td>
                                    <form method="POST" action="{{ route('admin.type.toggleStatus', $type) }}">
                                        @csrf
                                        <button type="submit"
                                            class="btn btn-sm {{ $type->status ? 'btn-success' : 'btn-secondary' }}">
                                            {{ $type->status ? 'Active' : 'Inactive' }}
                                        </button>
                                    </form>
                                </td>
                                <td>{{ $type->created_at->format('d M Y') }}</td>
                                <td>
                                    <a href="{{ route('admin.type.edit', $type->id) }}"
                                        class="btn btn-sm btn-primary">Edit</a>
                                    <form action="{{ route('admin.type.destroy', $type->id) }}" method="POST"
                                        class="d-inline" onsubmit="return confirm('Delete this type?')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-muted">No types found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                <!-- at the bottom of your product index -->
                <div class="d-flex justify-content-center mt-4">
                    {{ $types->links('pagination::bootstrap-5') }}
                </div>

            </div>
        </div>
    </div>
@endsection
