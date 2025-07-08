@extends('admin.auth.dashboard')

@section('content')
<div class="container">
    <h4>Product List</h4>

    <a href="{{ route('admin.products.create') }}" class="btn btn-primary mb-3">Add Product</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>Image</th>
                <th>Title</th>
                <th>Category</th>
                <th>Type</th>
                <th>Op. Status</th>
                <th>Buy/Sell</th>
                <th>Price</th>
                <th class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
        @forelse ($product as $product)
            <tr>
                <td>
                    @if(!empty($product->images[0]))
                        <img src="{{ asset('storage/'.$product->images[0]) }}" width="50" height="50" style="object-fit: cover;" alt="image">
                    @endif
                </td>
                <td>{{ $product->title }}</td>
                <td>{{ $product->category->name ?? '-' }}</td>
                <td>{{ $product->type->name ?? '-' }}</td>
                <td>{{ $product->operationStatus->name ?? '-' }}</td>
                <td>{{ ucfirst($product->buy_sell) }}</td>
                <td>₹{{ $product->price }}</td>
                <td class="text-center">
                    <a href="{{ route('products.edit', $product) }}" class="btn btn-sm btn-info">Edit</a>
                    <form action="{{ route('products.destroy', $product) }}" method="POST" class="d-inline">
                        @csrf @method('DELETE')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Delete product?')">Delete</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr><td colspan="8">No products found.</td></tr>
        @endforelse
        </tbody>
    </table>

    {{ $products->links() }}
</div>
@endsection
