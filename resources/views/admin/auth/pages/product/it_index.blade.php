@extends('admin.auth.dashboard')

@section('content')
    <div class="container mt-4">
        <h4 class="mb-4 text-primary">Product List</h4>

        <a href="{{ route('admin.products.create') }}" class="btn btn-primary mb-3">+ Add Product</a>
        {{-- <a href="{{ route('admin.productmenu') }}" class="btn btn-primary mb-3">Test Product</a> --}}

        @if (session('success'))
            <div class="alert alert-success" id="flash-message">{{ session('success') }}</div>
            <script>
                setTimeout(() => document.getElementById('flash-message')?.remove(), 3000);
            </script>
        @endif

        <div class="table-responsive">
            <table class="table table-bordered table-striped nowrap" id="typeTable" style="width: 100%;">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Product</th>
                        <th>Category</th>
                        <th>Status</th>
                        <th>No . Of Pdf</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($products as $index => $product)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            {{-- <td>{{ $product->vendor->name ?? 'N/A' }}</td> --}}
                            <td>
                                @php
                                    $imagePath = $product->images;
                                    $hasImage = $imagePath && Storage::disk('public')->exists($imagePath);
                                @endphp
                                <div class="product-image">
                                    @if ($hasImage)
                                        <img src="{{ asset('storage/' . $imagePath) }}" alt="Product Image">
                                    @else
                                        <img src="{{ asset('assets/images/default.png') }}" alt="No Image">
                                    @endif
                                </div>
                            </td>
                            {{-- <td>{{ $product->category->name_en ?? '-' }}</td> --}}
                            <td>{{ $product->category->name_it ?? 'N/A' }}</td>

                            
                            <td>
                                @if ($product->operationStatus?->name_it === 'Active')
                                    <span class="badge bg-success">Active</span>
                                @else
                                    <span class="badge bg-secondary">{{ $product->operationStatus->name_it ?? 'N/A' }}</span>
                                @endif
                            </td>
                            <td class="text-center">
                                @php
                                    $pdfs = json_decode($product->pdf ?? '[]', true);
                                    $pdfs = is_array($pdfs) ? $pdfs : [$product->pdf];
                                @endphp
                                @if (!empty($pdfs))
                                    <div class="d-flex flex-wrap gap-2 justify-content-center">
                                        @foreach ($pdfs as $pdfPath)
                                            @if ($pdfPath && \Illuminate\Support\Facades\Storage::disk('public')->exists($pdfPath))
                                                <a href="{{ asset('storage/' . $pdfPath) }}" target="_blank"
                                                    class="btn btn-outline-danger btn-sm" title="View PDF">
                                                    <i class="bi bi-file-earmark-pdf-fill fs-5 "></i>
                                                </a>
                                            @else
                                                <span class="text-danger small d-block">Missing</span>
                                            @endif
                                        @endforeach
                                    </div>
                                @else
                                    <span class="text-muted">No PDF</span>
                                @endif
                            </td>

                            <td>
                                <a href="{{ route('admin.products.show', $product) }}" class="btn btn-sm btn-info">
                                    <i class="bi bi-eye"></i>
                                </a>
                                <a href="{{ route('admin.products.edit', $product) }}" class="btn btn-sm btn-warning">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <form action="{{ route('admin.products.destroy', $product) }}" method="POST"
                                    class="d-inline-block" onsubmit="return confirm('Are you sure to delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger">
                                        <i class="bi bi-trash3-fill"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8" class="text-center text-muted">No products found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
