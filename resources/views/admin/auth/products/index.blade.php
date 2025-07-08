@if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif



{{-- <!DOCTYPE html>
<html>
<head><title>Admin Products</title></head>
<body>

<h2>Products</h2>

@if (session('success'))
    <div style="color:green">{{ session('success') }}</div>
@endif

<p><a href="{{ route('admin.products.create') }}">Add New Product</a></p>
<form method="GET" action="{{ route('admin.products.index') }}">
    <input type="text" name="search" placeholder="Search by title or tags" value="{{ request('search') }}">
    <select name="collection">
        <option value="">All Collections</option>
        @foreach ($collections as $collection)
            <option value="{{ $collection }}" {{ request('collection') == $collection ? 'selected' : '' }}>
                {{ $collection }}
            </option>
        @endforeach
    </select>
    <input type="number" step="0.01" name="price_min" placeholder="Min Price" value="{{ request('price_min') }}">
    <input type="number" step="0.01" name="price_max" placeholder="Max Price" value="{{ request('price_max') }}">
    <select name="sort">
        <option value="">Sort By</option>
        <option value="price" {{ request('sort') == 'price' ? 'selected' : '' }}>Price</option>
        <option value="created_at" {{ request('sort') == 'created_at' ? 'selected' : '' }}>Created Date</option>
        <option value="title" {{ request('sort') == 'title' ? 'selected' : '' }}>Title</option>
        <option value="star_points" {{ request('sort') == 'star_points' ? 'selected' : '' }}>Star Points</option>
    </select>
    <select name="direction">
        <option value="asc" {{ request('direction') == 'asc' ? 'selected' : '' }}>Ascending</option>
        <option value="desc" {{ request('direction') == 'desc' ? 'selected' : '' }}>Descending</option>
    </select>
    <button type="submit">Filter</button>
</form>

<table border="1" cellpadding="5" cellspacing="0">
    <thead>
        <tr>
            <th>Title</th>
            <th>Images</th>
            <th>Price</th>
            <th>Collection</th>
            <th>Tags</th>
            <th>Star Points</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    @forelse ($products as $product)
        <tr>
            <td>{{ $product->title }}</td>
            <td>
                @if ($product->images)
                    @foreach ($product->images as $img)
                        <img src="{{ asset('storage/' . $img) }}" width="50" alt="product image" />
                    @endforeach
                @endif
            </td>
            <td>${{ $product->price }}</td>
            <td>{{ $product->collection }}</td>
            <td>{{ $product->product_tags }}</td>
            <td>{{ $product->star_points }}</td>
            <td>
                <a href="{{ route('admin.products.edit', $product) }}">Edit</a> |
                <form method="POST" action="{{ route('admin.products.destroy', $product) }}" style="display:inline-block" onsubmit="return confirm('Are you sure?');">
                    @csrf
                    @method('DELETE')
                    <button style="background:none; border:none; color:red; cursor:pointer;">Delete</button>
                </form>
            </td>
        </tr>
    @empty
        <tr><td colspan="7">No products found.</td></tr>
    @endforelse
    </tbody>
</table>

{{ $products->links() }}

<form method="POST" action="{{ route('admin.logout') }}">
    @csrf
    <button type="submit">Logout</button>
</form>

</body>
</html> --}}






@extends('admin.auth.dashboard')

@section('content')
<div class="container mt-4">
    <h2>Product List</h2>

    <a href="{{ route('admin.products.create') }}" class="btn btn-primary mb-3">+ Add Product</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>Title</th>
                <th>Price</th>
                <th>Star Points</th>
                <th>Category</th>
                <th>Type</th>
                <th>Created</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($products as $product)
                <tr>
                    <td>{{ $product->title }}</td>
                    <td>₹{{ $product->price }}</td>
                    <td>{{ $product->star_points ?? '-' }}</td>
                    <td>{{ $product->category->name ?? 'N/A' }}</td>
                    <td>{{ $product->type->name ?? 'N/A' }}</td>
                    <td>{{ $product->created_at->diffForHumans() }}</td>
                    <td>
                        <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete this product?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="7" class="text-center">No products found.</td></tr>
            @endforelse
        </tbody>
    </table>

    {{ $products->links() }}
</div>
@endsection
