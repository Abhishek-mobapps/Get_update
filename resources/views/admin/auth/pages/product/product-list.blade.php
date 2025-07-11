<div class="col-md-4 mb-4">
    <div class="card shadow-sm h-100 border rounded">

        <!-- Header -->
        <div class="card-header bg-dark text-white text-center fw-bold">
            Search for Investor in Start-Ups
        </div>

        <!-- Product Image -->
        <img src="{{ $product->images ? asset('storage/' . $product->images) : asset('assets/images/no-image.png') }}"
             class="card-img-top" style="height: 200px; object-fit: cover;" alt="Product Image">

        <!-- Request Button -->
        <div class="p-2 text-center">
            <a href="#" class="btn btn-dark btn-sm">REQUEST INFORMATION</a>
        </div>

        <!-- State Section -->
        <div class="bg-light px-3 py-2 d-flex justify-content-between align-items-center">
            <span class="fw-bold text-uppercase text-secondary small">State</span>
            <span class="text-success"><i class="bi bi-circle-fill"></i></span>
        </div>

        <!-- Info Details -->
        <div class="card-body small px-3 py-2">
            @if ($product->operation_code)
                <div class="d-flex flex-column border-bottom py-1">
                    <div class="fw-bold text-muted">OPERATION CODE</div>
                    <div>Ref. {{ $product->operation_code }} – {{ $product->title }}</div>
                </div>
            @endif

            @if ($product->nation)
                <div class="d-flex justify-content-between border-bottom py-1">
                    <div class="fw-bold text-muted">NATION</div>
                    <div>{{ $product->nation->name }}</div>
                </div>
            @endif

            @if ($product->region)
                <div class="d-flex justify-content-between border-bottom py-1">
                    <div class="fw-bold text-muted">REGION</div>
                    <div>{{ $product->region->name }}</div>
                </div>
            @endif

            @if ($product->sector)
                <div class="d-flex justify-content-between border-bottom py-1">
                    <div class="fw-bold text-muted">SECTOR</div>
                    <div>{{ $product->sector->name }}</div>
                </div>
            @endif

            @if ($product->type_of_system)
                <div class="d-flex justify-content-between border-bottom py-1">
                    <div class="fw-bold text-muted">TYPE OF SYSTEM</div>
                    <div>{{ $product->type_of_system }}</div>
                </div>
            @endif

            @if ($product->type_of_operation)
                <div class="d-flex justify-content-between border-bottom py-1">
                    <div class="fw-bold text-muted">TYPE OF OPERATION</div>
                    <div>{{ $product->type_of_operation }}</div>
                </div>
            @endif

            @if ($product->value_from || $product->value_to)
                <div class="d-flex justify-content-between border-bottom py-2">
                    <div class="fw-bold text-muted">VALUE</div>
                    <div>
                        From € {{ number_format($product->value_from, 0, ',', '.') }}
                        to € {{ number_format($product->value_to ?? 0, 0, ',', '.') }}
                    </div>
                </div>
            @endif

            @if ($product->description)
                <div class="pt-2">
                    <div class="fw-bold text-muted mb-1">DESCRIPTION</div>
                    <p class="small">{{ Str::limit(strip_tags($product->description), 500) }}</p>
                </div>
            @endif
        </div>

        <!-- Investor Deck Button (PDF) -->
        @php
            $pdfs = json_decode($product->pdf ?? '[]', true);
        @endphp
        @if (!empty($pdfs))
            <div class="card-footer text-center bg-white border-top-0">
                <a href="{{ asset('storage/' . $pdfs[0]) }}" target="_blank"
                   class="btn btn-outline-primary btn-sm w-100">VIEW INVESTOR DECK</a>
            </div>
        @endif

    </div>
</div>
