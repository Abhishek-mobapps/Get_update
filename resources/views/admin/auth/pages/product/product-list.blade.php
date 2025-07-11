@extends('admin.auth.dashboard')

@section('content')
<div class="container py-4">
    <h3 class="mb-4 text-primary">Welcome to the Capital Community</h3>

    <!-- Filters -->
    <form method="GET" action="{{ route('admin.productmenu') }}" class="row g-2 mb-4" id="filterForm">
        <div class="col-md-3">
            <select name="category_id" class="form-select" onchange="document.getElementById('filterForm').submit();">
                <option value="">All Categories</option>
                @foreach($categories as $cat)
                    <option value="{{ $cat->id }}" {{ request('category_id') == $cat->id ? 'selected' : '' }}>
                        {{ $cat->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="col-md-3">
            <select name="type_id" class="form-select" onchange="document.getElementById('filterForm').submit();">
                <option value="">All Types</option>
                @foreach($types as $type)
                    <option value="{{ $type->id }}" {{ request('type_id') == $type->id ? 'selected' : '' }}>
                        {{ $type->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="col-md-2">
            <select name="buy_sell" class="form-select" onchange="document.getElementById('filterForm').submit();">
                <option value="">Buy/Sell</option>
                <option value="buy" {{ request('buy_sell') == 'buy' ? 'selected' : '' }}>Buy</option>
                <option value="sell" {{ request('buy_sell') == 'sell' ? 'selected' : '' }}>Sell</option>
            </select>
        </div>

        <div class="col-md-4">
            <select name="operation_status_id" class="form-select" onchange="document.getElementById('filterForm').submit();">
                <option value="">Operation Status</option>
                @foreach($statuses as $status)
                    <option value="{{ $status->id }}" {{ request('operation_status_id') == $status->id ? 'selected' : '' }}>
                        {{ $status->name }}
                    </option>
                @endforeach
            </select>
        </div>
    </form>

    <!-- Product Cards -->
    <div class="row">
        @forelse ($products as $product)
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm rounded">
                    <div class="card-header bg-dark text-white text-center">
                        {{ $product->title }}
                    </div>

                    <img src="{{ $product->images ? asset('storage/' . $product->images) : asset('assets/images/no-image.png') }}"
                         class="card-img-top" style="height: 180px; object-fit: cover;" alt="Image">

                    <div class="card-body">
                        <p><strong>Category:</strong> {{ $product->category->name ?? '-' }}</p>
                        <p><strong>Type:</strong> {{ $product->type->name ?? '-' }}</p>
                        <p><strong>Op. Status:</strong> {{ $product->operationStatus->name ?? '-' }}</p>
                        <p><strong>Buy/Sell:</strong> {{ ucfirst($product->buy_sell) }}</p>
                        <p><strong>Nation:</strong> {{ $product->nation->name ?? '-' }}</p>
                        <p><strong>Region:</strong> {{ $product->region->name ?? '-' }}</p>
                        <p><strong>Price:</strong>
                            {{$product->value_from }} - {{$product->value_to}}
                        </p>
                        <p><strong>Description:</strong> {!! Str::limit($product->description, 100) !!}</p>
                    </div>

                    <div class="card-footer text-center">
                        <a href="#" class="btn btn-outline-primary btn-sm">View Details</a>
                        <a href="#" class="btn btn-outline-secondary btn-sm">Investor Deck</a>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12 text-center">
                <p class="text-muted">No products found.</p>
            </div>
        @endforelse
    </div>

    <div class="d-flex justify-content-center mt-4">
        {{ $products->links('pagination::bootstrap-5') }}
    </div>
</div>
@endsection
