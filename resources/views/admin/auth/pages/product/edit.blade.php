@extends('admin.auth.dashboard')

@section('content')
<div class="container">
    <h4>Edit Product</h4>

    <form action="{{ route('admin.products.update', $product) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Title</label>
            <input name="title" class="form-control" required value="{{ old('title', $product->title) }}">
        </div>
        <div class="mb-3">
            <label>Reference Code</label>
            <input name="reference_code" class="form-control" required value="{{ old('title', $product->title) }}">
        </div>

        <div class="mb-3">
            <label>Sector</label>
            <input name="sector" class="form-control" required value="{{ old('title', $product->title) }}">
        </div>

        <div class="mb-3">
            <label>Description</label>
            <textarea name="description" rows="3" class="form-control">{!! old('description', $product->description) !!}</textarea>
        </div>

        <div class="mb-3">
            <label>Price (₹)</label>
            <input type="number" step="0.01" name="price" class="form-control" required
                value="{{ old('price', $product->price) }}">
        </div>

        <div class="mb-3">
            <label>Buy/Sell</label>
            <select name="buy_sell" class="form-control">
                <option value="buy" {{ $product->buy_sell == 'buy' ? 'selected' : '' }}>Buy</option>
                <option value="sell" {{ $product->buy_sell == 'sell' ? 'selected' : '' }}>Sell</option>
            </select>
        </div>

        <div class="mb-3">
            <label>Category</label>
            <select name="category_id" class="form-control" required>
                @foreach ($categories as $cat)
                    <option value="{{ $cat->id }}" {{ $product->category_id == $cat->id ? 'selected' : '' }}>
                        {{ $cat->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Type</label>
            <select name="type_id" class="form-control" required>
                @foreach ($types as $type)
                    <option value="{{ $type->id }}" {{ $product->type_id == $type->id ? 'selected' : '' }}>
                        {{ $type->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Operation Status</label>
            <select name="operation_status_id" class="form-control" required>
                @foreach ($statuses as $status)
                    <option value="{{ $status->id }}"
                        {{ $product->operation_status_id == $status->id ? 'selected' : '' }}>{{ $status->name }}
                    </option>
                @endforeach
            </select>
        </div>

        


        {{-- ✅ Use single image input --}}
        <div class="mb-3">
            <label>Upload New Image</label>
            <input type="file" name="images" class="form-control" accept="image/*">
        </div>

        {{-- ✅ Show current image if exists --}}
        @if ($product->image && file_exists(public_path('storage/' . $product->image)))
            <div class="mb-3">
                <label>Current Image:</label><br>
                <img src="{{ asset('storage/' . $product->image) }}" width="80" height="80"
                    style="object-fit: cover;" class="rounded shadow">
            </div>
        @endif

        <button class="btn btn-success">Update</button>
        <a href="{{ route('admin.products.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection
