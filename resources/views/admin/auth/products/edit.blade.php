<!DOCTYPE html>
<html>
<head><title>Edit Product</title></head>
<body>

<h2>Edit Product</h2>

@if ($errors->any())
    <div style="color:red">
        <ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
    </div>
@endif

<form method="POST" action="{{ route('admin.products.update', $product) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <label>Title:</label>
    <input type="text" name="title" value="{{ old('title', $product->title) }}" required><br>

    <label>Description:</label>
    <textarea name="description">{{ old('description', $product->description) }}</textarea><br>

    <label>Current Images:</label><br>
    @if($product->images)
        @foreach ($product->images as $img)
            <img src="{{ asset('storage/' . $img) }}" width="100" alt="product image" />
        @endforeach
    @endif
    <br>

    <label>Add More Images:</label>
    <input type="file" name="images[]" multiple><br>

    <label>Price:</label>
    <input type="number" step="0.01" name="price" value="{{ old('price', $product->price) }}" required><br>

    <label>Compare at Price:</label>
    <input type="number" step="0.01" name="compare_at_price" value="{{ old('compare_at_price', $product->compare_at_price) }}"><br>

    <label>Cost per Price:</label>
    <input type="number" step="0.01" name="cost_per_price" value="{{ old('cost_per_price', $product->cost_per_price) }}"><br>

    <label>Star Points:</label>
    <input type="number" step="0.01" name="star_points" value="{{ old('star_points', $product->star_points) }}"><br>

    <label>Product Type:</label>
    <input type="text" name="product_type" value="{{ old('product_type', $product->product_type) }}"><br>

    <label>Vendor:</label>
    <input type="text" name="vendor" value="{{ old('vendor', $product->vendor) }}"><br>

    <label>Collection:</label>
    <input type="text" name="collection" value="{{ old('collection', $product->collection) }}"><br>

    <label>Product Tags:</label>
    <input type="text" name="product_tags" value="{{ old('product_tags', $product->product_tags) }}"><br>

    <button type="submit">Update Product</button>
</form>

<p><a href="{{ route('admin.products.index') }}">Back to products</a></p>

</body>
</html>
