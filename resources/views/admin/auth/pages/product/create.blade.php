@extends('admin.auth.dashboard')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

{{-- Alerts --}}
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> Please fix the following:
        <ul class="mb-0">@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
    </div>
@endif
@if (session('success'))<div class="alert alert-success">{{ session('success') }}</div>@endif
@if (session('error'))<div class="alert alert-danger">{{ session('error') }}</div>@endif

<div class="container-fluid mt-4">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white fw-bold">Create Product</div>
        <div class="card-body">
            <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                {{-- Row 1: Operation Code / Buy Sell --}}
                <div class="row g-3 mb-3">
                    <div class="col-md-8">
                        <label class="form-label">Operation Code</label>
                        <input type="text" name="operation_code" class="form-control" value="{{ old('operation_code') }}">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Buy / Sell</label>
                        <select name="buy_sell" class="form-select" required>
                            <option value="">Select</option>
                            <option value="buy" {{ old('buy_sell') == 'buy' ? 'selected' : '' }}>Buy</option>
                            <option value="sell" {{ old('buy_sell') == 'sell' ? 'selected' : '' }}>Sell</option>
                        </select>
                    </div>
                </div>

                {{-- Row 2: Nation / Region / Status --}}
                <div class="row g-3 mb-3">
                    <div class="col-md-4">
                        <label class="form-label">Nation</label>
                        <select name="nation_id" class="form-select" required>
                            <option value="">Select Nation</option>
                            @foreach ($nations as $item)
                                <option value="{{ $item->id }}" {{ old('nation_id') == $item->id ? 'selected' : '' }}>{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Region</label>
                        <select name="region_id" class="form-select" required>
                            <option value="">Select Region</option>
                            @foreach ($regions as $item)
                                <option value="{{ $item->id }}" {{ old('region_id') == $item->id ? 'selected' : '' }}>{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Operation Status</label>
                        <select name="operation_status_id" class="form-select" required>
                            <option value="">Select Status</option>
                            @foreach ($operationStatuses as $item)
                                <option value="{{ $item->id }}" {{ old('operation_status_id') == $item->id ? 'selected' : '' }}>{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                {{-- Row 3: Category / Type / Sector --}}
                <div class="row g-3 mb-3">
                    <div class="col-md-4">
                        <label class="form-label">Category</label>
                        <select name="category_id" class="form-select" required>
                            <option value="">Select Category</option>
                            @foreach ($categories as $item)
                                <option value="{{ $item->id }}" {{ old('category_id') == $item->id ? 'selected' : '' }}>{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Type</label>
                        <select name="type_id" class="form-select" required>
                            <option value="">Select Type</option>
                            @foreach ($types as $item)
                                <option value="{{ $item->id }}" {{ old('type_id') == $item->id ? 'selected' : '' }}>{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Sector</label>
                        <select name="sector_id" class="form-select" required>
                            <option value="">Select Sector</option>
                            @foreach ($sectors as $item)
                                <option value="{{ $item->id }}" {{ old('sector_id') == $item->id ? 'selected' : '' }}>{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                {{-- Row 4: System / Operation Type --}}
                <div class="row g-3 mb-3">
                    <div class="col-md-6">
                        <label class="form-label">Type of System</label>
                        <input type="text" name="type_of_system" class="form-control" value="{{ old('type_of_system') }}">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Type of Operation</label>
                        <input type="text" name="type_of_operation" class="form-control" value="{{ old('type_of_operation') }}">
                    </div>
                </div>

                {{-- Row 5: Value Range --}}
                <div class="row g-3 mb-3">
                    <div class="col-md-6">
                        <label class="form-label">Initial Value</label>
                        <input type="text" name="value_from" class="form-control" value="{{ old('value_from') }}">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Final Value</label>
                        <input type="text" name="value_to" class="form-control" value="{{ old('value_to') }}">
                    </div>
                </div>

                {{-- Description --}}
                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea name="description" class="form-control ckeditor" rows="4">{{ old('description') }}</textarea>
                </div>

                {{-- Uploads --}}
                <div class="mb-3">
                    <label class="form-label"><i class="bi bi-image-fill text-warning me-1"></i>Product Image</label>
                    <input type="file" name="images" class="form-control" accept="image/*">
                </div>

                <div class="mb-3">
                    <label class="form-label"><i class="bi bi-file-earmark-pdf-fill text-danger me-1"></i>Main PDF <small>(Required)</small></label>
                    <input type="file" name="pdfs[]" class="form-control" multiple accept="application/pdf">
                </div>

                {{-- <div class="mb-4">
                    <label class="form-label"><i class="bi bi-file-earmark-plus-fill text-primary me-1"></i>Supporting PDF <small>(Optional)</small></label>
                    <input type="file" name="pdfs_it[]" class="form-control" multiple accept="application/pdf">
                </div> --}}

                {{-- Actions --}}
                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-success px-4">Submit</button>
                    <a href="{{ route('admin.products.index') }}" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- CKEditor --}}
<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
<script>
    document.querySelectorAll('.ckeditor').forEach((el) => {
        ClassicEditor.create(el).catch(error => console.error(error));
    });
</script>

<style>
    label.form-label {
        font-weight: 600;
        font-size: 0.95rem;
    }
    .form-control, .form-select {
        font-size: 0.94rem;
    }
    input[type="file"] {
        font-size: 0.92rem;
        padding: 0.4rem 0.6rem;
    }
</style>
@endsection
