@extends('admin.auth.dashboard')

@section('content')
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4>{{ ucfirst($title ?? 'Nation') }} List</h4>
        <a href="{{ route('admin.nations.create') }}" class="btn btn-primary">Add {{ ucfirst($title ?? 'Nation') }}</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Deleted</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach($nations as $item)
            <tr>
                <td>{{ $item->name }}</td>
                <td>{{ $item->deleted_at ? 'Yes' : 'No' }}</td>
                <td>
                    @if(!$item->deleted_at)
                        <a href="{{ route('admin.nations.edit', $item) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('admin.nations.destroy', $item) }}" method="POST" class="d-inline">
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
