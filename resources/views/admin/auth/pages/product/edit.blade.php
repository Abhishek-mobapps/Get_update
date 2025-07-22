@extends('admin.auth.dashboard')

@section('content')
    {{-- Validation & Session Messages --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Fix the following:
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <div class="container-fluid mt-4">
        <div class="card shadow">
            <div class="card-header bg-primary text-white fw-bold">Edit Product</div>
            <div class="card-body">
                <form action="{{ route('admin.products.update', $product) }}" method="POST" enctype="multipart/form-data">
                    @csrf @method('PUT')

                    <div class="row g-3 mb-3">
                        <div class="col-md-4">
                            <label>Title <span class="text-danger">*</span></label>
                            <input type="text" name="title" class="form-control"
                                value="{{ old('title', $product->title) }}" required>
                        </div>
                        <div class="col-md-4">
                            <label>Operation Code</label>
                            <input type="text" name="operation_code" class="form-control"
                                value="{{ old('operation_code', $product->operation_code) }}">
                        </div>
                        <div class="col-md-4">
                            <label>Type of System</label>
                            <input type="text" name="type_of_system" class="form-control"
                                value="{{ old('type_of_system', $product->type_of_system) }}">
                        </div>

                        <div class="col-md-4">
                            <label>Type of Operation</label>
                            <input type="text" name="type_of_operation" class="form-control"
                                value="{{ old('type_of_operation', $product->type_of_operation) }}">
                        </div>
                        <div class="col-md-4">
                            <label>Buy/Sell <span class="text-danger">*</span></label>
                            <select name="buy_sell" class="form-select" required>
                                <option value="">Select</option>
                                <option value="buy" {{ old('buy_sell', $product->buy_sell) == 'buy' ? 'selected' : '' }}>
                                    Buy</option>
                                <option value="sell"
                                    {{ old('buy_sell', $product->buy_sell) == 'sell' ? 'selected' : '' }}>Sell</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label>Min Value</label>
                            <input type="text" name="value_from" class="form-control"
                                value="{{ old('value_from', $product->value_from) }}">
                        </div>

                        <div class="col-md-4">
                            <label>Max Value</label>
                            <input type="number" name="value_to" class="form-control"
                                value="{{ old('value_to', $product->value_to) }}">
                        </div>
                        <div class="col-md-4">
                            <label>Category <span class="text-danger">*</span></label>
                            <select name="category_id" class="form-select" required>
                                <option value="">Select Category</option>
                                @foreach ($categories as $item)
                                    <option value="{{ $item->id }}"
                                        {{ old('category_id', $product->category_id) == $item->id ? 'selected' : '' }}>
                                        {{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label>Type <span class="text-danger">*</span></label>
                            <select name="type_id" class="form-select" required>
                                <option value="">Select Type</option>
                                @foreach ($types as $item)
                                    <option value="{{ $item->id }}"
                                        {{ old('type_id', $product->type_id) == $item->id ? 'selected' : '' }}>
                                        {{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label>Operation Status <span class="text-danger">*</span></label>
                            <select name="operation_status_id" class="form-select" required>
                                <option value="">Select Status</option>
                                @foreach ($operationStatuses as $item)
                                    <option value="{{ $item->id }}"
                                        {{ old('operation_status_id', $product->operation_status_id) == $item->id ? 'selected' : '' }}>
                                        {{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label>Nation <span class="text-danger">*</span></label>
                            <select name="nation_id" class="form-select" required>
                                <option value="">Select Nation</option>
                                @foreach ($nations as $item)
                                    <option value="{{ $item->id }}"
                                        {{ old('nation_id', $product->nation_id) == $item->id ? 'selected' : '' }}>
                                        {{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label>Region <span class="text-danger">*</span></label>
                            <select name="region_id" class="form-select" required>
                                <option value="">Select Region</option>
                                @foreach ($regions as $item)
                                    <option value="{{ $item->id }}"
                                        {{ old('region_id', $product->region_id) == $item->id ? 'selected' : '' }}>
                                        {{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label>Sector <span class="text-danger">*</span></label>
                            <select name="sector_id" class="form-select" required>
                                <option value="">Select Sector</option>
                                @foreach ($sectors as $item)
                                    <option value="{{ $item->id }}"
                                        {{ old('sector_id', $product->sector_id) == $item->id ? 'selected' : '' }}>
                                        {{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-12">
                            <label>Description</label>
                            <textarea name="description" class="form-control" rows="3">{{ old('description', $product->description) }}</textarea>
                        </div>

                        <div class="col-md-6">
                            <label>Image (Single)</label>
                            <input type="file" name="images" class="form-control">
                        </div>
                        @php
                            $pdfs = json_decode($product->pdf ?? '[]', true);
                            $pdfs = is_array($pdfs) ? $pdfs : [$product->pdf];
                        @endphp

                        <h6>Existing PDFs:</h6>
                        <div id="existing-pdfs" class="mb-3">
                            @foreach ($pdfs as $index => $pdfPath)
                                <div class="d-flex align-items-center mb-2" data-index="{{ $index }}">
                                    <a href="{{ asset('storage/' . $pdfPath) }}" target="_blank"
                                        class="btn btn-outline-secondary btn-sm me-2">
                                        View PDF {{ $index + 1 }}
                                    </a>
                                    <button type="button" class="btn btn-danger btn-sm remove-existing-pdf"
                                        data-path="{{ $pdfPath }}">
                                        ❌ Remove
                                    </button>
                                </div>
                            @endforeach
                        </div>

                        <input type="hidden" name="remove_pdfs" id="remove_pdfs">

                        <div class="mb-3">
                            <label for="pdf">Upload New PDFs:</label>
                            <input type="file" name="pdf[]" class="form-control" multiple accept="application/pdf">
                        </div>

                    </div>

                    <div class="d-flex justify-content-between mt-4">
                        <button type="submit" class="btn btn-primary">Update Product</button>
                        <a href="{{ route('admin.products.index') }}" class="btn btn-secondary">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
    let removedPDFs = [];

    document.querySelectorAll('.remove-existing-pdf').forEach(button => {
        button.addEventListener('click', function () {
            const parent = this.closest('[data-index]');
            const path = this.getAttribute('data-path');

            removedPDFs.push(path);
            document.getElementById('remove_pdfs').value = JSON.stringify(removedPDFs);

            parent.remove();
        });
    });
</script>

@endsection
