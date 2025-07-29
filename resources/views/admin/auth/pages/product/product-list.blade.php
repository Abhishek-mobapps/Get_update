@extends('layouts.app')

@section('content')
<div style="padding: 25%; background: #d1b382; min-height: 100vh;">

    <form method="GET" action="{{ route('admin.products.index') }}" style="background:#000; padding:15px; border-radius:8px; display:flex; gap:15px; flex-wrap: wrap; justify-content:center; margin-bottom:20px;">
        <select name="category_id" onchange="this.form.submit()" style="padding:8px; border-radius:4px;">
            <option value="">All Categories</option>
            @foreach($categories as $category)
                <option value="{{ $category->id }}" {{ request('category_id')==$category->id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>

        <select name="type_id" onchange="this.form.submit()" style="padding:8px; border-radius:4px;">
            <option value="">All Types</option>
            @foreach($types as $type)
                <option value="{{ $type->id }}" {{ request('type_id')==$type->id ? 'selected' : '' }}>
                    {{ $type->name }}
                </option>
            @endforeach
        </select>

        <select name="buy_sell" onchange="this.form.submit()" style="padding:8px; border-radius:4px;">
            <option value="">Buy/Sell</option>
            <option value="buy" {{ request('buy_sell')=='buy' ? 'selected' : '' }}>Buy</option>
            <option value="sell" {{ request('buy_sell')=='sell' ? 'selected' : '' }}>Sell</option>
        </select>

        <select name="operation_status_id" onchange="this.form.submit()" style="padding:8px; border-radius:4px;">
            <option value="">Operation Status</option>
            @foreach($operationStatuses as $status)
                <option value="{{ $status->id }}" {{ request('operation_status_id')==$status->id ? 'selected' : '' }}>
                    {{ $status->name }}
                </option>
            @endforeach
        </select>
    </form>

    @if($selectedCategory)
        <h2 style="color:#000; font-weight:700; margin-bottom:15px; text-align:center;">
            {{ $selectedCategory->name }}
        </h2>
    @endif

    <div style="display:flex; flex-wrap:wrap; gap:20px; justify-content:center;">

        @forelse ($products as $product)
        <div style="background:#d1b382; border-radius:12px; padding:15px; width:320px; box-shadow:0 4px 8px rgba(0,0,0,0.1); display:flex; flex-direction:column;">

            <div style="position:relative; margin-bottom:12px;">
                <img src="{{ asset('storage/' . $product->images) }}" alt="{{ $product->title }}" style="width:100%; height:180px; object-fit:cover; border-radius:8px;">
                <span style="position:absolute; top:8px; left:8px; background:#000; color:#fff; padding:5px 10px; border-radius:4px; font-size:13px; font-weight:700;">
                    {{ $product->category->name }}
                </span>
            </div>

            <div style="color:#000; font-weight:600; font-size:14px; flex-grow:1;">
                @php
                $fields = [
                    ['Operation code', $product->operation_code],
                    ['Nation', $product->nation->name ?? 'N/A'],
                    ['Region', $product->region->name ?? 'N/A'],
                    ['Sector', $product->sector->name ?? 'N/A'],
                    ['System type', $product->type_of_system],
                    ['Operation Type', $product->type_of_operation],
                    ['Value', $product->value_from]
                ];
                @endphp

                @foreach ($fields as $field)
                <div style="display:flex; justify-content:space-between; margin-bottom:8px;">
                    <div>{{ $field[0] }}</div>
                    <div>{{ $field[1] ?? 'N/A' }}</div>
                </div>
                @if (!$loop->last)
                    <hr style="margin:4px 0; border-color:rgba(0,0,0,0.2);">
                @endif
                @endforeach
            </div>

            <div style="display:flex; align-items:center; gap:8px; margin-top:15px; flex-wrap: wrap;">

                @php
                    $pdfs = is_array($product->pdf) ? $product->pdf : json_decode($product->pdf ?? '[]', true);
                    if (!is_array($pdfs)) $pdfs = [$product->pdf];
                @endphp

                @if(!empty($pdfs) && count($pdfs) > 0)
                    @foreach ($pdfs as $pdf)
                        @php
                            $pdfPath = is_array($pdf) ? ($pdf['path'] ?? '') : $pdf;
                        @endphp
                        @if ($pdfPath && \Illuminate\Support\Facades\Storage::disk('public')->exists($pdfPath))
                            <a href="{{ asset('storage/' . $pdfPath) }}" target="_blank" style="background:#7396ae; border-radius:6px; padding:12px 18px; color:#fff; font-weight:600; font-size:14px; text-decoration:none; display:inline-block; min-width:110px; text-align:center;">
                                PDF
                            </a>
                        @endif
                    @endforeach
                @endif

                <a href="#" style="background:#a88346; border-radius:6px; padding:12px 18px; color:#000; font-weight:600; font-size:16px; text-align:center; text-decoration:none; min-width:110px; flex-grow:1; user-select:none;">
                    REQUEST INFORMATION
                </a>
            </div>
        </div>
        @empty
        <p style="width:100%; text-align:center; color:#000;">No products found matching your filters.</p>
        @endforelse
    </div>
</div>
@endsection
