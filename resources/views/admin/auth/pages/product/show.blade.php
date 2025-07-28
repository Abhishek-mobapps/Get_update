@extends('admin.auth.dashboard')

@section('content')
<div class="container mt-4">
    <h4 class="mb-4 text-primary">Product Details</h4>
    
    <!-- Back and Edit Buttons -->
    <div class="d-flex justify-content-between align-items-center mb-3">
        <a href="{{ route('admin.products.index') }}" class="btn btn-secondary">
            <i class="bi bi-arrow-left"></i> Back to List
        </a>

        <a href="{{ route('admin.products.edit', $product) }}" class="btn btn-primary">
            <i class="bi bi-pencil-fill"></i> Edit
        </a>
    </div>

    <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 1rem; align-items: stretch;">

        {{-- Basic Info --}}
        <div class="grid-item"><div class="fw-semibold text-secondary mb-1">Product Name</div>{{ $product->title }}</div>
        <div class="grid-item"><div class="fw-semibold text-secondary mb-1">Vendor</div>{{ $product->vendor->name ?? 'N/A' }}</div>
        <div class="grid-item"><div class="fw-semibold text-secondary mb-1">Reference Code</div>{{ $product->reference_code ?? '-' }}</div>
        <div class="grid-item"><div class="fw-semibold text-secondary mb-1">Operation Code</div>{{ $product->operation_code ?? '-' }}</div>

        {{-- Location & Classification --}}
        <div class="grid-item"><div class="fw-semibold text-secondary mb-1">Nation</div>{{ $product->nation->name ?? '-' }}</div>
        <div class="grid-item"><div class="fw-semibold text-secondary mb-1">Region</div>{{ $product->region->name ?? '-' }}</div>
        <div class="grid-item"><div class="fw-semibold text-secondary mb-1">Category</div>{{ $product->category->name ?? '-' }}</div>
        <div class="grid-item"><div class="fw-semibold text-secondary mb-1">Type</div>{{ $product->type->name ?? '-' }}</div>

        {{-- Status & Sector --}}
        <div class="grid-item"><div class="fw-semibold text-secondary mb-1">Status</div>{{ $product->operationStatus->name ?? '-' }}</div>
        <div class="grid-item"><div class="fw-semibold text-secondary mb-1">Sector</div>{{ $product->sector->name ?? '-' }}</div>
        <div class="grid-item"><div class="fw-semibold text-secondary mb-1">System</div>{{ $product->type_of_system ?? '-' }}</div>
        <div class="grid-item"><div class="fw-semibold text-secondary mb-1">Operation</div>{{ $product->type_of_operation ?? '-' }}</div>

        {{-- Financial --}}
        <div class="grid-item"><div class="fw-semibold text-secondary mb-1">From (₹)</div>{{ $product->value_from ?? '-' }}</div>
        <div class="grid-item"><div class="fw-semibold text-secondary mb-1">To (₹)</div>{{ $product->value_to ?? '-' }}</div>
        <div class="grid-item"><div class="fw-semibold text-secondary mb-1">Buy/Sell</div>{{ ucfirst($product->buy_sell) }}</div>
        <div class="grid-item d-none"></div> {{-- Empty to balance 4 columns --}}

        {{-- Image (Left side) --}}
        <div class="grid-item" style="grid-column: span 2;">
            <div class="fw-semibold text-secondary mb-1">Image</div>
            @php
                $imagePath = $product->images;
                $hasImage = $imagePath && Storage::disk('public')->exists($imagePath);
            @endphp

            @if ($hasImage)
                <img src="{{ asset('storage/' . $imagePath) }}" alt="Product Image"
                    style="max-width: 100%; max-height: 150px; object-fit: contain; border-radius: 8px; box-shadow: 0 0 5px rgba(0,0,0,0.1);">
            @else
                <img src="{{ asset('assets/images/default.png') }}" alt="No Image"
                    style="max-width: 100%; max-height: 150px; object-fit: contain; border-radius: 8px; opacity: 0.5;">
            @endif
        </div>

        {{-- PDFs (Right side) --}}
        <div class="grid-item" style="grid-column: span 2;">
            <div class="fw-semibold text-secondary mb-1">Documents (PDF / PSD)</div>
            <div class="d-flex flex-wrap gap-3">
                @php
                    $docs = [];
                    if (!empty($product->pdf)) {
                        if (is_array($product->pdf)) {
                            $docs = $product->pdf;
                        } else {
                            $decoded = json_decode($product->pdf, true);
                            $docs = is_array($decoded) ? $decoded : [$product->pdf];
                        }
                    }
                @endphp

                @if (count($docs) > 0)
                    @foreach ($docs as $doc)
                        @php
                            $ext = pathinfo($doc, PATHINFO_EXTENSION);
                            $iconClass = match (strtolower($ext)) {
                                'pdf' => 'bi-file-earmark-pdf-fill text-danger',
                                'psd' => 'bi-file-earmark-image-fill text-primary',
                                default => 'bi-file-earmark-text-fill text-secondary',
                            };
                        @endphp

                        <a href="{{ asset('storage/app' . $doc) }}" target="_blank" class="doc-icon">
                            <i class="bi {{ $iconClass }}" style="font-size: 2rem;"></i>
                        </a>
                    @endforeach
                @else
                    <span class="text-muted">No documents uploaded</span>
                @endif
            </div>
        </div>

        {{-- Description - Full Width --}}
        <div class="grid-item" style="grid-column: span 4;">
            <div class="fw-semibold text-secondary mb-1">Description</div>
            <div>
                {!! $product->description !!}
            </div>
        </div>
    </div>
</div>

<style>
    .grid-item {
        border: 1px solid #ddd;
        padding: 12px;
        border-radius: 8px;
        background: #fff;
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
        height: 100%;
        word-break: break-word;
    }

    .doc-icon {
        width: 60px;
        height: 60px;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 8px;
        border: 1px solid #ccc;
        background-color: #f9f9f9;
        text-decoration: none;
    }
</style>
@endsection
