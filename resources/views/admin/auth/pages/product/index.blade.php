@extends('admin.auth.dashboard')

@section('content')
<div class="container mt-4">
    <h4 class="mb-4 text-primary">Product Details</h4>

    <a href="{{ route('admin.products.index') }}" class="btn btn-secondary mb-4">← Back to List</a>

    <div class="card shadow-sm">
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-md-3"><strong>Title:</strong></div>
                <div class="col-md-9">{{ $products->title }}</div>
            </div>

            <div class="row mb-3">
                <div class="col-md-3"><strong>Description:</strong></div>
                <div class="col-md-9">{!! $products->description !!}</div>
            </div>

            <div class="row mb-3">
                <div class="col-md-3"><strong>Reference Code:</strong></div>
                <div class="col-md-9">{{ $products->reference_code }}</div>
            </div>

            <div class="row mb-3">
                <div class="col-md-3"><strong>Operation Code:</strong></div>
                <div class="col-md-9">{{ $products->operation_code }}</div>
            </div>

            <div class="row mb-3">
                <div class="col-md-3"><strong>Nation:</strong></div>
                <div class="col-md-9">{{ $products->nation->name ?? '-' }}</div>
            </div>

            <div class="row mb-3">
                <div class="col-md-3"><strong>Region:</strong></div>
                <div class="col-md-9">{{ $products->region->name ?? '-' }}</div>
            </div>

            <div class="row mb-3">
                <div class="col-md-3"><strong>Category:</strong></div>
                <div class="col-md-9">{{ $products->category->name ?? '-' }}</div>
            </div>

            <div class="row mb-3">
                <div class="col-md-3"><strong>Type:</strong></div>
                <div class="col-md-9">{{ $products->type->name ?? '-' }}</div>
            </div>

            <div class="row mb-3">
                <div class="col-md-3"><strong>Operation Status:</strong></div>
                <div class="col-md-9">{{ $products->operationStatus->name ?? '-' }}</div>
            </div>

            <div class="row mb-3">
                <div class="col-md-3"><strong>Sector:</strong></div>
                <div class="col-md-9">{{ $products->sector->name ?? '-' }}</div>
            </div>

            <div class="row mb-3">
                <div class="col-md-3"><strong>System Type:</strong></div>
                <div class="col-md-9">{{ $products->type_of_system ?? '-' }}</div>
            </div>

            <div class="row mb-3">
                <div class="col-md-3"><strong>Operation Type:</strong></div>
                <div class="col-md-9">{{ $products->type_of_operation ?? '-' }}</div>
            </div>

            <div class="row mb-3">
                <div class="col-md-3"><strong>Value From:</strong></div>
                <div class="col-md-9">₹{{$products->value_from }}</div>
            </div>

            <div class="row mb-3">
                <div class="col-md-3"><strong>Value To:</strong></div>
                <div class="col-md-9">₹{{$products->value_to}}</div>
            </div>

            <div class="row mb-3">
                <div class="col-md-3"><strong>Buy/Sell:</strong></div>
                <div class="col-md-9 text-capitalize">{{ $products->buy_sell }}</div>
            </div>

            {{-- Image --}}
            <div class="row mb-3">
                <div class="col-md-3"><strong>Image:</strong></div>
                <div class="col-md-9">
                    @if ($products->images && file_exists(public_path('storage/' . $products->images)))
                        <img src="{{ asset('storage/' . $products->images) }}" width="200" class="rounded shadow">
                    @else
                        <p>No image available.</p>
                    @endif
                </div>
            </div>

            {{-- PDFs --}}
            <div class="row mb-3">
                <div class="col-md-3"><strong>PDFs:</strong></div>
                <div class="col-md-9">
                    @php $pdfs = json_decode($products->pdfs ?? '[]', true); @endphp
                    @if (!empty($pdfs))
                        <ul class="list-group">
                            @foreach ($pdf as $index => $pdf)
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span>PDF {{ $index + 1 }}</span>
                                    <a href="{{ asset('storage/' . $pdf) }}" target="_blank" class="btn btn-outline-primary btn-sm">
                                        View
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    @else
                        <p>No PDFs uploaded.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
