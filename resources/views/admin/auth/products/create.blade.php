<!DOCTYPE html>
<html>
<head><title>Add Product</title></head>
<body>

<h2>Add New Product</h2>

@if ($errors->any())
    <div style="color:red">
        <ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
    </div>
@endif

<form method="POST" action="{{ route('admin.products.store') }}" enctype="multipart/form-data">
    @csrf
    <label>Title:</label>
    <input type="text" name="title" value="{{ old('title') }}" required><br>

    <label>Description:</label>
    <textarea name="description">{{ old('description') }}</textarea><br>

    <label>Images (multiple allowed):</label>
    <input type="file" name="images[]" multiple><br>

    <label>Price:</label>
    <input type="number" step="0.01" name="price" value="{{ old('price') }}" required><br>

    <label>Compare at Price:</label>
    <input type="number" step="0.01" name="compare_at_price" value="{{ old('compare_at_price') }}"><br>

    <label>Cost per Price:</label>
    <input type="number" step="0.01" name="cost_per_price" value="{{ old('cost_per_price') }}"><br>

    <label>Star Points:</label>
    <input type="number" step="0.01" name="star_points" value="{{ old('star_points', 0) }}"><br>

    <label>Product Type:</label>
    <input type="text" name="product_type" value="{{ old('product_type') }}"><br>

    <label>Vendor:</label>
    <input type="text" name="vendor" value="{{ old('vendor') }}"><br>

    <label>Collection:</label>
    <input type="text" name="collection" value="{{ old('collection') }}"><br>

    <label>Product Tags:</label>
    <input type="text" name="product_tags" value="{{ old('product_tags') }}"><br>

    <button type="submit">Add Product</button>
</form>

<p><a href="{{ route('admin.products.index') }}">Back to products</a></p>

</body>
</html>
