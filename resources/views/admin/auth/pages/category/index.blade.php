@extends('admin.layouts.app')
@section('content')
<div class="container">
    <h4 class="mb-3">Categories</h4>
    <a href="{{ route('admin.category.create') }}" class="btn btn-primary mb-3">Add Category</a>
    <table class="table table-bordered">
        <thead><tr><th>Name</th><th>Status</th><th>Actions</th></tr></thead>
        <tbody>
            @foreach($categories as $cat)
            <tr>
                <td>{{ $cat->name }}</td>
                <td>
                    <form action="{{ route('admin.category.toggleStatus', $cat) }}" method="POST">
                        @csrf
                        <button class="btn btn-sm {{ $cat->status == 'active' ? 'btn-success' : 'btn-secondary' }}">
                            {{ ucfirst($cat->status) }}
                        </button>
                    </form>
                </td>
                <td>
                    <a href="{{ route('admin.category.edit', $cat) }}" class="btn btn-sm btn-info">Edit</a>
                    <form action="{{ route('admin.category.destroy', $cat) }}" method="POST" class="d-inline">
                        @csrf @method('DELETE')
                        <button class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $categories->links() }}
</div>
@endsection
