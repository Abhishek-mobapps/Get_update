@extends('admin.auth.dashboard')

@section('content')
   
    <style>
        td, th {
            vertical-align: middle !important;
        }
    </style>

    <div class="container-fluid mt-4">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Type List</h5>
                <a href="{{ route('admin.type.create') }}" class="btn btn-sm btn-primary">+ Add Type</a>
            </div>
            <div class="card-body">
                @if(session('success'))
                    <div class="alert alert-success" id="success-message">
                        {{ session('success') }}
                    </div>
                    <script>
                        setTimeout(() => {
                            let msg = document.getElementById('success-message');
                            if (msg) {
                                msg.style.transition = "opacity 0.5s";
                                msg.style.opacity = 0;
                                setTimeout(() => msg.remove(), 500);
                            }
                        }, 3000);
                    </script>
                @endif

                <div class="table-responsive">
                    <table class="table table-bordered table-striped nowrap" id="typeTable" style="width: 100%;">
                        <thead class="table-light">
                            <tr>
                                <th>#</th>
                                <th>Name (EN)</th>
                                {{-- <th>Name (IT)</th> --}}
                                <th>Status</th>
                                <th>Created At</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($types as $index => $type)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $type->name }}</td>
                                    {{-- <td>{{ $type->name_it }}</td> --}}
                                    <td>
                                        <form method="POST" action="{{ route('admin.type.toggleStatus', $type) }}">
                                            @csrf
                                            <button type="submit" class="btn btn-sm {{ $type->status === 'active' ? 'btn-success' : 'btn-secondary' }}">
                                                {{ ucfirst($type->status) }}
                                            </button>
                                        </form>
                                    </td>
                                    <td>{{ $type->created_at->format('d M Y') }}</td>
                                    <td>
                                        <div class="d-flex align-items-center justify-content-center gap-2">
                                            <a href="{{ route('admin.type.edit', $type) }}" class="text-primary" title="Edit">
                                                <i class="bi bi-pencil-square fs-5"></i>
                                            </a>
                                            <form class="mb-0" action="{{ route('admin.type.destroy', $type) }}" method="POST"
                                                  onsubmit="return confirm('Are you sure to delete this type?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn p-0 border-0 bg-transparent text-danger" title="Delete">
                                                    <i class="bi bi-trash-fill fs-5"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
@endsection

