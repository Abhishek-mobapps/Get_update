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
                            <th>Sr No</th>
                            <th>Name</th>
                            <th>Status</th>
                            <th>Created</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($types as $index=>$type)
                            <tr>
                                <td>{{$index+1}}</td>
                                <td>{{ $type->name }}</td>
                                <td>
                                    <form method="POST" action="{{ route('admin.type.toggleStatus', $type) }}">
                                        @csrf
                                        <button type="submit"
                                            class="btn btn-sm {{ $type->status == 'active' ? 'btn-success' : 'btn-secondary' }}">
                                            {{ ucfirst($type->status) }}
                                        </button>
                                    </form>
                                </td>
                                <td>{{ $type->created_at->format('d M Y') }}</td>

                                <td class="text-center align-middle">
                                    <div class="d-flex justify-content-center align-items-center" style="gap: 10px;">
                                        <!-- Edit (Bootstrap Icon) -->
                                        <a href="{{ route('admin.type.edit', $type) }}" title="Edit"
                                            class="text-primary d-flex align-items-center">
                                            <i class="bi bi-pencil-square fs-5"></i>
                                        </a>

                                        <!-- Delete (Bootstrap Icon) -->
                                        <form action="{{ route('admin.type.destroy', $type) }}" method="POST"
                                            onsubmit="return confirm('Delete product?')" style="margin: 0;"
                                            class="d-flex align-items-center">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn p-0 m-0 border-0 bg-transparent text-danger"
                                                title="Delete">
                                                <i class="bi bi-trash-fill fs-5"></i>
                                            </button>
                                        </form>
                                    </div>
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
