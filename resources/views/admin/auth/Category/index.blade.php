@extends('admin.auth.dashboard')


@section('content')



<div style="margin-left: 300px;" class="mt-4">
    <div class="card w-75">
        <div class="card-header py-2 px-3 d-flex justify-content-between align-items-center">
            <h6 class="mb-0 fs-6">Categories</h6>
            <a href="{{ route('admin.category.create') }}" class="btn btn-sm btn-success px-2 py-1">+ Add</a>
        </div>
        @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
        @endif
        <div class="card-body py-2 px-3">
            <table class="table table-sm table-hover align-middle mb-0 text-center">
                <thead class="table-light">
                    <tr>
                        {{-- <th class="py-1 px-2">#</th> --}}
                        <th class="py-1 px-2">Name</th>
                        <th class="py-1 px-2">Created</th>
                        <th class="py-1 px-2">Status</th>
                        <th class="py-1 px-2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                     @forelse($categories as $category)
                    <tr>
                        {{-- <td class="py-1 px-2">{{</td>  --}}
                        <td class="py-1 px-2">{{ $category->name }}</td>
                        <td class="py-1 px-2">{{ $category->created_at->format('d M Y') }}</td>
                        <td class="py-1 px-2">
                            @if($category->deleted_at)
                            <span class="badge bg-danger">Deleted</span>
                        @else
                            <span class="badge bg-success">Active</span>
                        @endif
                        </td>
                        <td class="py-1 px-2">
                            <a href="{{ route('admin.category.edit', $category) }}" class="btn btn-sm btn-primary px-2 py-1">Edit</a>
                            <form action="{{ route('admin.category.destroy', $category->id) }}" method="POST" class="d-inline"
                              onsubmit="return confirm('Are you sure to delete this category?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">Soft Delete</button>
                        </form>
                        </td>
                    </tr>
                    @empty
                    <tr><td colspan="6">No categories found.</td></tr>
                     @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection