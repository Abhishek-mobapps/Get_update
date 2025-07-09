@extends('admin.auth.dashboard')

@section('content')
<div class="container mt-4">
    <h2>Create Product</h2>

    <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Product Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="category_id" class="form-label">Category</label>
            <select name="category_id" class="form-select">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="type_id" class="form-label">Type</label>
            <select name="type_id" class="form-select">
                @foreach($types as $type)
                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="operation_status_id" class="form-label">Operation Status</label>
            <select name="operation_status_id" class="form-select">
                @foreach($operationStatuses as $status)
                    <option value="{{ $status->id }}">{{ $status->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="buy_sell" class="form-label">Buy/Sell</label>
            <select name="buy_sell" class="form-select">
                <option value="buy">Buy</option>
                <option value="sell">Sell</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" name="price" class="form-control" required>
        </div>

         <div class="mb-3">
            <label id="description" for="description" class="form-label">Description</label>
            <textarea rows="4" cols="50" class="form-control" required>

            </textarea>
        </div>

        <div class="mb-3">
            <label for="images" class="form-label">Upload Images</label>
            <input type="file" name="images[]" class="form-control" multiple>
        </div>

        <button type="submit" class="btn btn-primary">Create Product</button>
    </form>
   <script src="https://cdn.ckeditor.com/4.25.1/lts/standard/ckeditor.js"></script>
<script>
  CKEDITOR.replace('description');
</script>

</div>
@push('scripts')
<script src="https://cdn.ckeditor.com/4.25.1/lts/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('description');
</script>
@endpush
@endsection
