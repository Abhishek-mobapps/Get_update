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
            <input name="reference_code" class="form-control" required value="{{ old('reference_code', $product->reference_code) }}">
        </div>

        <div class="mb-3">
            <label>Sector</label>
            <input name="sector" class="form-control" required value="{{ old('sector', $product->sector->name ?? '') }}">
        </div>

        <div class="mb-3">
            <label>Description</label>
            <textarea name="description" rows="3" class="form-control">{!! old('description', $product->description) !!}</textarea>
        </div>

        <div class="mb-3">
            <label>Price 1(₹)</label>
            <input type="text" name="value_from" class="form-control" required value="{{ old('value_from', $product->value_from) }}">
        </div>

        <div class="mb-3">
            <label>Price 2(₹)</label>
            <input type="text" name="value_to" class="form-control" required value="{{ old('value_to', $product->value_to) }}">
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
                    <option value="{{ $cat->id }}" {{ $product->category_id == $cat->id ? 'selected' : '' }}>{{ $cat->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Type</label>
            <select name="type_id" class="form-control" required>
                @foreach ($types as $type)
                    <option value="{{ $type->id }}" {{ $product->type_id == $type->id ? 'selected' : '' }}>{{ $type->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Operation Status</label>
            <select name="operation_status_id" class="form-control" required>
                @foreach ($operationStatuses as $status)
                    <option value="{{ $status->id }}" {{ $product->operation_status_id == $status->id ? 'selected' : '' }}>{{ $status->name }}</option>
                @endforeach
            </select>
        </div>

        {{-- ✅ Upload new image --}}
        <div class="mb-3">
            <label>Upload New Image</label>
            <input type="file" name="images" class="form-control" accept="images">
        </div>

        {{-- ✅ Show current image --}}
        @if ($product->images && file_exists(public_path('storage/' . $product->images)))
            <div class="mb-3">
                <label>Current Image:</label><br>
                <img src="{{ asset('storage/' . $product->images) }}" width="100" height="100" class="rounded shadow" style="object-fit: cover;">
            </div>
        @endif

        {{-- ✅ Upload new PDFs --}}
        <div class="mb-3">
            <label>Upload Additional PDFs</label>
            <input type="file" name="pdf[]" class="form-control" accept="application/pdf" multiple>
        </div>

        {{-- ✅ Show existing PDFs --}}
        @if ($product->pdfs)
            @php $pdfFiles = json_decode($product->pdfs, true); @endphp
            @if (!empty($pdfFiles))
                <div class="mb-3">
                    <label>Existing PDFs:</label>
                    <ul class="list-group">
                        @foreach ($pdfFiles as $index => $pdf)
                            <li class="list-group-item">
                                <a href="{{ asset('storage/' . $pdf) }}" target="_blank">📄 View PDF {{ $index + 1 }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif
        @endif

        <div class="mt-4">
            <button class="btn btn-success">Update</button>
            <a href="{{ route('admin.products.index') }}" class="btn btn-secondary">Back</a>
        </div>
    </form>
</div>
@endsection
