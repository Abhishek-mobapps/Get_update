@extends('admin.auth.dashboard')

@section('content')
    <div class="container mt-4">
        <h4 class="mb-4 text-primary">Product List</h4>

        <a href="{{ route('admin.products.create') }}" class="btn btn-primary mb-3">+ Add Product</a>
         <a href="{{ route('admin.productmenu') }}" class="btn btn-primary mb-3">Product Menu</a>

        @if (session('success'))
            <div class="alert alert-success" id="flash-message">{{ session('success') }}</div>
            <script>
                setTimeout(() => document.getElementById('flash-message')?.remove(), 3000);
            </script>
        @endif

        <!-- ✅ Scrollable table container -->
        <div class="table-responsive">
            <table class="table custom-table table-striped">
                <thead class="table-dark text-center">
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Reference</th>
                        <th>Op. Code</th>
                        <th>Nation</th>
                        <th>Region</th>
                        <th>Category</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>Sector</th>
                        <th>System</th>
                        <th>Operation</th>
                        <th>From</th>
                        <th>To</th>
                        <th>Buy/Sell</th>
                        <th>Description</th>
                        <th>PDFs</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($products as $i => $product)
                        <tr>
                            <td>{{ $i + 1 }}</td>
                            <td>
                                @if ($product->images && file_exists(public_path('storage/' . $product->images)))
                                    <img src="{{ asset('storage/' . $product->images) }}" width="70" height="70"
                                        style="object-fit: cover;" class="rounded shadow-sm">
                                @else
                                    <img src="{{ asset('assets/images/default.png') }}" width="70" height="70"
                                        class="rounded shadow-sm">
                                @endif
                            </td>
                            <td>{{ $product->title }}</td>
                            <td>{{ $product->reference_code }}</td>
                            <td>{{ $product->operation_code }}</td>
                            <td>{{ $product->nation->name ?? '-' }}</td>
                            <td>{{ $product->region->name ?? '-' }}</td>
                            <td>{{ $product->category->name ?? '-' }}</td>
                            <td>{{ $product->type->name ?? '-' }}</td>
                            <td>{{ $product->operationStatus->name ?? '-' }}</td>
                            <td>{{ $product->sector->name ?? '-' }}</td>
                            <td>{{ $product->type_of_system ?? '-' }}</td>
                            <td>{{ $product->type_of_operation ?? '-' }}</td>
                            <td>₹{{ $product->value_from ?? '-' }}</td>
                            <td>₹{{ $product->value_to ?? '-' }}</td>
                            <td>{{ ucfirst($product->buy_sell) }}</td>
                            <td>{!! Str::limit(strip_tags($product->description), 50) !!}</td>
                            <td>
                                @php $pdfs = json_decode($product->pdf ?? '[]', true); @endphp
                                @if (!empty($pdfs))
                                    @foreach ($pdfs as $index => $pdf)
                                        <a href="{{ asset('storage/' . $pdf) }}" target="_blank"
                                            class="btn btn-outline-primary btn-sm mb-1 d-block">
                                            PDF {{ $index + 1 }}
                                        </a>
                                    @endforeach
                                @else
                                    <span class="text-muted">No PDFs</span>
                                @endif
                            </td>
                            <td class="text-center">
                                <a href="{{ route('admin.products.edit', $product) }}"
                                    class="btn btn-sm btn-warning"><i class="bi bi-pencil-square"></i></a>
                                <form action="{{ route('admin.products.destroy', $product) }}" method="POST"
                                    class="d-inline-block" onsubmit="return confirm('Delete this product?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger"><i class="bi bi-trash3-fill"></i></button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="19" class="text-center">No products found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
