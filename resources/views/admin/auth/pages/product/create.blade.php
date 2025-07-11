@extends('admin.auth.dashboard')

@section('content')
{{-- Validation Errors --}}
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> Please fix the following errors:<br><br>
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

{{-- Session Success Message --}}
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

{{-- Session Error Message --}}
@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

<div class="container-fluid mt-4">
    <div class="card">
        <div class="card-header bg-primary text-white">Create Product</div>
        <div class="card-body">
            <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label>Title <span class="text-danger">*</span></label>
                        <input type="text" name="title" class="form-control" required value="{{ old('title') }}">
                    </div>

                    {{-- <div class="col-md-6">
                        <label>Reference Code</label>
                        <input type="text" name="reference_code" class="form-control" value="{{ old('reference_code') }}">
                    </div> --}}
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label>Operation Code</label>
                        <input type="text" name="operation_code" class="form-control" value="{{ old('operation_code') }}">
                    </div>

                    <div class="col-md-6">
                        <label>Type of System</label>
                        <input type="text" name="type_of_system" class="form-control" value="{{ old('type_of_system') }}">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label>Type of Operation</label>
                        <input type="text" name="type_of_operation" class="form-control" value="{{ old('type_of_operation') }}">
                    </div>


                    <div class="col-md-3">
                        <label>Buy/Sell <span class="text-danger">*</span></label>
                        <select name="buy_sell" class="form-select" required>
                            <option value="">Select</option>
                            <option value="buy" {{ old('buy_sell') == 'buy' ? 'selected' : '' }}>Buy</option>
                            <option value="sell" {{ old('buy_sell') == 'sell' ? 'selected' : '' }}>Sell</option>
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label>Min Value</label>
                        <input type="text" name="value_from" class="form-control" value="{{ old('value_from') }}">
                    </div>
                    <div class="col-md-6">
                        <label>Max Value</label>
                        <input type="number" name="value_to" class="form-control" value="{{ old('value_to') }}">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-4">
                        <label>Category <span class="text-danger">*</span></label>
                        <select name="category_id" class="form-select" required>
                            <option value="">Select Category</option>
                            @foreach ($categories as $item)
                                <option value="{{ $item->id }}" {{ old('category_id') == $item->id ? 'selected' : '' }}>
                                    {{ $item->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-4">
                        <label>Type <span class="text-danger">*</span></label>
                        <select name="type_id" class="form-select" required>
                            <option value="">Select Type</option>
                            @foreach ($types as $item)
                                <option value="{{ $item->id }}" {{ old('type_id') == $item->id ? 'selected' : '' }}>
                                    {{ $item->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-4">
                        <label>Operation Status <span class="text-danger">*</span></label>
                        <select name="operation_status_id" class="form-select" required>
                            <option value="">Select Status</option>
                            @foreach ($operationStatuses as $item)
                                <option value="{{ $item->id }}" {{ old('operation_status_id') == $item->id ? 'selected' : '' }}>
                                    {{ $item->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-4">
                        <label>Nation <span class="text-danger">*</span></label>
                        <select name="nation_id" class="form-select" required>
                            <option value="">Select Nation</option>
                            @foreach ($nations as $item)
                                <option value="{{ $item->id }}" {{ old('nation_id') == $item->id ? 'selected' : '' }}>
                                    {{ $item->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-4">
                        <label>Region <span class="text-danger">*</span></label>
                        <select name="region_id" class="form-select" required>
                            <option value="">Select Region</option>
                            @foreach ($regions as $item)
                                <option value="{{ $item->id }}" {{ old('region_id') == $item->id ? 'selected' : '' }}>
                                    {{ $item->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-4">
                        <label>Sector <span class="text-danger">*</span></label>
                        <select name="sector_id" class="form-select" required>
                            <option value="">Select Sector</option>
                            @foreach ($sectors as $item)
                                <option value="{{ $item->id }}" {{ old('sector_id') == $item->id ? 'selected' : '' }}>
                                    {{ $item->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="mb-3">
                    <label>Description</label>
                    <textarea name="description" class="form-control" rows="3">{{ old('description') }}</textarea>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label>Image (Single)</label>
                        <input type="file" name="images" class="form-control">
                    </div>

                    <div class="col-md-6">
                        <label>PDFs (Multiple)</label>
                        <input type="file" name="pdf[]" class="form-control" multiple>
                    </div>
                </div>

                <button type="submit" class="btn btn-success">Create Product</button>
                <a href="{{ route('admin.products.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection
