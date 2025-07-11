@extends('admin.auth.dashboard')

@section('content')
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4>{{ ucfirst($title ?? 'Region') }} List</h4>
        <a href="{{ route('admin.regions.create') }}" class="btn btn-primary">Add {{ ucfirst($title ?? 'Region') }}</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Created</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach($regions as $item)
            <tr>
                <td>{{ $item->name }}</td>
                <td>{{ $item->created_at->format('d M Y') }}</td>
                <td>
                    @if(!$item->deleted_at)
                        <a href="{{ route('admin.regions.edit', $item) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('admin.regions.destroy', $item) }}" method="POST" class="d-inline">
                            @csrf @method('DELETE')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Delete?')">Delete</button>
                        </form>
                    @else
                        <a href="#" class="btn btn-sm btn-success">Restore</a>
                        <form action="#" method="POST" class="d-inline">
                            @csrf @method('DELETE')
                            <button class="btn btn-sm btn-dark" onclick="return confirm('Force delete?')">Force Delete</button>
                        </form>
                    @endif
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
