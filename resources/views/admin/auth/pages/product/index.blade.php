@extends('admin.auth.dashboard')

@section('content')
    <div class="container">
        <h4>Product List</h4>

        <a href="{{ route('admin.products.create') }}" class="btn btn-primary mb-3">Add Product</a>
        <a href="{{ route('admin.productmenu') }}" class="btn btn-primary mb-3">Product List</a>
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

        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Category</th>
                    <th>Type</th>
                    <th>Op. Status</th>
                    <th>Buy/Sell</th>
                    <th>Price</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($products as $product)
                    <tr>
                        <td>
                            @php
                                $imagePath =
                                    is_array($product->images) && isset($product->images[0])
                                        ? $product->images[0]
                                        : null;
                            @endphp

                            @if ($imagePath)
                                <img src="{{ asset('storage/' . $imagePath) }}" width="50" height="50"
                                    style="object-fit: cover;" alt="image">
                            @else
                                <img src="{{ asset('images/placeholder.png') }}" width="50" height="50"
                                    style="object-fit: cover;" alt="No Image">
                            @endif
                        </td>



                        </td>
                        <td>{{ $product->title }}</td>
                        <td>{{$product->description}}</td>
                        <td>{{ $product->category->name ?? '-' }}</td>
                        <td>{{ $product->type->name ?? '-' }}</td>
                        <td>{{ $product->operationStatus->name ?? '-' }}</td>
                        <td>{{ ucfirst($product->buy_sell) }}</td>
                        <td>₹{{ $product->price }}</td>
                        <td class="text-center">
                            <a href="{{ route('admin.products.edit', $product) }}" class="btn btn-sm btn-info">Edit</a>
                            <form action="{{ route('admin.products.destroy', $product) }}" method="POST" class="d-inline">
                                @csrf @method('DELETE')
                                <button class="btn btn-sm btn-danger"
                                    onclick="return confirm('Delete product?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8">No products found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        <div class="d-flex justify-content-center mt-4">
            {{ $products->links('pagination::bootstrap-5') }}
        </div>
    </div>
@endsection
