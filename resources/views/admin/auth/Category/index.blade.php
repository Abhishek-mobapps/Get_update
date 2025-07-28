@extends('admin.auth.dashboard')

@section('content')
    <div class="container mt-4">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h6>Category List</h6>
                <a href="{{ route('admin.category.create') }}" class="btn btn-sm btn-success">+ Add</a>
            </div>
            <div class="card-body">
                @if (session('success'))
                    <div id="flash-message" class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                    <script>
                        setTimeout(() => {
                            let alert = document.getElementById('flash-message');
                            if (alert) {
                                alert.style.transition = "opacity 0.5s ease-out";
                                alert.style.opacity = "0";
                                setTimeout(() => alert.remove(), 500);
                            }
                        }, 3000);
                    </script>
                @endif

                <table class="table table-bordered table-striped nowrap" id="typeTable" style="width: 100%;">
                    <thead class="table-light">
                        <tr>
                            <th>Sr. No</th>
                            <th>English Name</th>
                            {{-- <th>Italic Name</th> --}}
                            <th>Status</th>
                            <th>Created</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($categories as $index => $category)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{$category->name}}</td>
                               {{-- <td>{{ json_encode($category) }}</td> --}}
                               {{-- <td><em>{{$category->name_it}}</em></td> --}}



                                <td>
                                    <form method="POST" action="{{ route('admin.category.toggleStatus', $category) }}">
                                        @csrf
                                        <button type="submit"
                                            class="btn btn-sm {{ $category->status == 'active' ? 'btn-success' : 'btn-secondary' }}">
                                            {{ ucfirst($category->status) }}
                                        </button>
                                    </form>
                                </td>
                                <td>{{ $category->created_at->format('d M Y') }}</td>
                                <td>
                                    <div class="d-flex justify-content-center align-items-center" style="gap: 10px;">
                                        <a href="{{ route('admin.category.edit', $category) }}" title="Edit"
                                            class="text-primary d-flex align-items-center">
                                            <i class="bi bi-pencil-square fs-5"></i>
                                        </a>

                                        <form action="{{ route('admin.category.destroy', $category) }}" method="POST"
                                            onsubmit="return confirm('Delete category?')" style="margin: 0;"
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
                                <td colspan="6" class="text-muted">No categories found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

                {{-- <div class="d-flex justify-content-center mt-4">
                    {{ $categories->links('pagination::bootstrap-5') }}
                </div> --}}
            </div>
        </div>
    </div>
@endsection
