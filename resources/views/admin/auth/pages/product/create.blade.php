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
            <label for="description" class="form-label">Description</label>
            <textarea rows="10" cols="50" id="description" name="description" class="form-control" required>
            </textarea>
        </div>

        <div class="mb-3">
            <label for="images" class="form-label">Upload Images</label>
            <input type="file" name="images" class="form-control" accept="image/*">
        </div>

        <button type="submit" class="btn btn-primary">Create Product</button>
    </form>
   <script src="https://cdn.ckeditor.com/4.25.1/lts/standard/ckeditor.js"></script>
<script>
  CKEDITOR.replace('description');
</script>

</div>
<!-- CKEditor 5 CDN -->
<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>

<script>
    ClassicEditor
        .create(document.querySelector('#description'))
        .catch(error => {
            console.error('CKEditor initialization error:', error);
        });
</script>

@endsection
