@extends('admin.auth.dashboard')

@section('content')
    <div class="container mt-4">
        <h2>Create Product</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Title -->
            <div class="mb-3">
                <label for="title" class="form-label">Title <span class="text-danger">*</span></label>
                <input type="text" name="title" class="form-control" required>
            </div>

            <!-- Dropdowns -->
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label>Category <span class="text-danger">*</span></label>
                    <select name="category_id" class="form-select" required>
                        <option value="">Select Category</option>
                        @foreach ($categories as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-6 mb-3">
                    <label>Type <span class="text-danger">*</span></label>
                    <select name="type_id" class="form-select" required>
                        <option value="">Select Type</option>
                        @foreach ($types as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-6 mb-3">
                    <label>Operation Status <span class="text-danger">*</span></label>
                    <select name="operation_status_id" class="form-select" required>
                        <option value="">Select Status</option>
                        @foreach ($operationStatuses as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-6 mb-3">
                    <label>Nation <span class="text-danger">*</span></label>
                    <select name="nation_id" class="form-select" required>
                        <option value="">Select Nation</option>
                        @foreach ($nations as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-6 mb-3">
                    <label>Region <span class="text-danger">*</span></label>
                    <select name="region_id" class="form-select" required>
                        <option value="">Select Region</option>
                        @foreach ($regions as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-6 mb-3">
                    <label>Sector <span class="text-danger">*</span></label>
                    <select name="sector_id" class="form-select" required>
                        <option value="">Select Sector</option>
                        @foreach ($sectors as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <!-- Operation Code -->
            <div class="mb-3">
                <label>Operation Code</label>
                <input type="text" name="operation_code" class="form-control">
            </div>

            <!-- Type of System -->
            <div class="mb-3">
                <label>Type of System</label>
                <input type="text" name="type_of_system" class="form-control">
            </div>

            <!-- Type of Operation -->
            <div class="mb-3">
                <label>Type of Operation</label>
                <input type="text" name="type_of_operation" class="form-control">
            </div>

            <!-- Value (Two inline inputs) -->
            <div class="row mb-3">
                <label>Value</label>
                <div class="col-md-6">
                    <input type="text" name="value_currency" class="form-control" placeholder="Currency (Required)"
                        required>
                </div>
                <div class="col-md-6">
                    <input type="text" name="value_amount" class="form-control" placeholder="Amount (Optional)">
                </div>
            </div>

            <!-- Description -->
            <div class="mb-3">
                <label>Description</label>
                <textarea name="description" rows="4" class="form-control"></textarea>
            </div>

            <!-- Image Upload -->
            <div class="mb-3">
                <label>Images (Multiple)</label>
                <input type="file" name="images[]" class="form-control" multiple accept="image/*">
            </div>

            <!-- PDF Upload -->
            <div class="mb-3">
                <label>PDF (Single)</label>
                <input type="file" name="pdf" class="form-control" accept="application/pdf">
            </div>

            <!-- Submit -->
            <div class="text-end">
                <button type="submit" class="btn btn-primary">Create Product</button>
            </div>
        </form>

    </div>

    <!-- CKEditor -->
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#description'))
            .catch(error => console.error(error));
    </script>

    <!-- Optional: Increase Editor Height -->
    <style>
        #description+.ck-editor {
            min-height: 400px !important;
        }
    </style>
@endsection
