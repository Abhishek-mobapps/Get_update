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


@extends('admin.auth.dashboard')

@section('content')
<div class="container mt-4">
    <h2>Create Product</h2>

    <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col-md-6 mb-3">
                <label>Title</label>
                <input type="text" name="title" class="form-control" value="{{ old('title') }}" required>
                @error('title') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="col-md-6 mb-3">
                <label>Price</label>
                <input type="number" name="price" step="0.01" class="form-control" value="{{ old('price') }}" required>
                @error('price') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="col-md-6 mb-3">
                <label>Compare at Price</label>
                <input type="number" name="compare_at_price" step="0.01" class="form-control" value="{{ old('compare_at_price') }}">
            </div>

            <div class="col-md-6 mb-3">
                <label>Cost Per Price</label>
                <input type="number" name="cost_per_price" step="0.01" class="form-control" value="{{ old('cost_per_price') }}">
            </div>

            <div class="col-md-6 mb-3">
                <label>Star Points</label>
                <input type="number" name="star_points" class="form-control" value="{{ old('star_points') }}">
            </div>

            <div class="col-md-6 mb-3">
                <label>Category</label>
                <select name="category_id" class="form-select">
                    @foreach(\App\Models\Category::where('status', 'active')->get() as $cat)
                        <option value="{{ $cat->id }}" {{ old('category_id') == $cat->id ? 'selected' : '' }}>{{ $cat->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-md-6 mb-3">
                <label>Type</label>
                <select name="type_id" class="form-select">
                    @foreach(\App\Models\Type::where('status', 'active')->get() as $type)
                        <option value="{{ $type->id }}" {{ old('type_id') == $type->id ? 'selected' : '' }}>{{ $type->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-md-6 mb-3">
                <label>Vendor</label>
                <input type="text" name="vendor" class="form-control" value="{{ old('vendor') }}">
            </div>

            <div class="col-md-6 mb-3">
                <label>Collection</label>
                <input type="text" name="collection" class="form-control" value="{{ old('collection') }}">
            </div>

            <div class="col-md-6 mb-3">
                <label>Product Tags</label>
                <input type="text" name="product_tags" class="form-control" value="{{ old('product_tags') }}">
            </div>

            <div class="col-md-12 mb-3">
                <label>Description</label>
                <textarea name="description" class="form-control" rows="4">{{ old('description') }}</textarea>
            </div>

            <div class="col-md-12 mb-3">
                <label>Images</label>
                <input type="file" name="images[]" class="form-control" multiple>
                <small class="text-muted">You can upload multiple images</small>
            </div>
        </div>

        <button class="btn btn-success">Create Product</button>
    </form>
</div>
@endsection

</body>
</html>
