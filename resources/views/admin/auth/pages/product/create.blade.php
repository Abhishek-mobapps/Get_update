@extends('admin.auth.dashboard')

@section('content')
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    {{-- Validation & Session Messages --}}
    @if ($errors->any())
        <div class="alert alert-danger"><strong>Whoops!</strong> Fix the following:<ul class="mb-0">@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul></div>
    @endif

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <div class="container-fluid mt-4">
        <div class="card shadow">
            <div class="card-header bg-primary text-white fw-bold">Create Product</div>
            <div class="card-body">
                <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="row g-3 mb-3">
                        <div class="col-md-4">
                            <label>Title <span class="text-danger">*</span></label>
                            <input type="text" name="title" class="form-control" value="{{ old('title') }}" required>
                        </div>
                        <div class="col-md-4">
                            <label>Operation Code</label>
                            <input type="text" name="operation_code" class="form-control" value="{{ old('operation_code') }}">
                        </div>
                        <div class="col-md-4">
                            <label>Type of System</label>
                            <input type="text" name="type_of_system" class="form-control" value="{{ old('type_of_system') }}">
                        </div>

                        <div class="col-md-4">
                            <label>Type of Operation</label>
                            <input type="text" name="type_of_operation" class="form-control" value="{{ old('type_of_operation') }}">
                        </div>
                        <div class="col-md-4">
                            <label>Buy/Sell <span class="text-danger">*</span></label>
                            <select name="buy_sell" class="form-select" required>
                                <option value="">Select</option>
                                <option value="buy" {{ old('buy_sell') == 'buy' ? 'selected' : '' }}>Buy</option>
                                <option value="sell" {{ old('buy_sell') == 'sell' ? 'selected' : '' }}>Sell</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label>Min Value</label>
                            <input type="text" name="value_from" class="form-control" value="{{ old('value_from') }}">
                        </div>

                        <div class="col-md-4">
                            <label>Max Value</label>
                            <input type="number" name="value_to" class="form-control" value="{{ old('value_to') }}">
                        </div>
                        <div class="col-md-4">
                            <label>Category <span class="text-danger">*</span></label>
                            <select name="category_id" class="form-select" required>
                                <option value="">Select Category</option>
                                @foreach ($categories as $item)
                                    <option value="{{ $item->id }}" {{ old('category_id') == $item->id ? 'selected' : '' }}>{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label>Type <span class="text-danger">*</span></label>
                            <select name="type_id" class="form-select" required>
                                <option value="">Select Type</option>
                                @foreach ($types as $item)
                                    <option value="{{ $item->id }}" {{ old('type_id') == $item->id ? 'selected' : '' }}>{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label>Operation Status <span class="text-danger">*</span></label>
                            <select name="operation_status_id" class="form-select" required>
                                <option value="">Select Status</option>
                                @foreach ($operationStatuses as $item)
                                    <option value="{{ $item->id }}" {{ old('operation_status_id') == $item->id ? 'selected' : '' }}>{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label>Nation <span class="text-danger">*</span></label>
                            <select name="nation_id" class="form-select" required>
                                <option value="">Select Nation</option>
                                @foreach ($nations as $item)
                                    <option value="{{ $item->id }}" {{ old('nation_id') == $item->id ? 'selected' : '' }}>{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label>Region <span class="text-danger">*</span></label>
                            <select name="region_id" class="form-select" required>
                                <option value="">Select Region</option>
                                @foreach ($regions as $item)
                                    <option value="{{ $item->id }}" {{ old('region_id') == $item->id ? 'selected' : '' }}>{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label>Sector <span class="text-danger">*</span></label>
                            <select name="sector_id" class="form-select" required>
                                <option value="">Select Sector</option>
                                @foreach ($sectors as $item)
                                    <option value="{{ $item->id }}" {{ old('sector_id') == $item->id ? 'selected' : '' }}>{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-12">
                            <label>Description</label>
                            <textarea name="description" id="editor" rows="10" class="form-control">{{ old('description') }}</textarea>
                        </div>

                        <div class="col-md-6">
                            <label>Image (Single)</label>
                            <input type="file" name="images" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label>Upload PDFs (multiple):</label>
                            <input type="file" name="pdfs[]" class="form-control" multiple accept="application/pdf">
                        </div>
                    </div>

                    <div class="d-flex justify-content-between mt-4">
                        <button type="submit" class="btn btn-success">Create Product</button>
                        <a href="{{ route('admin.products.index') }}" class="btn btn-secondary">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
     <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>

  <script>
    ClassicEditor
      .create(document.querySelector('#editor'))
      .catch(error => {
          console.error(error);
      });
  </script>
  <style>
  #editor {
    min-height: 300px; /* You can increase to 400px, 500px, etc. */
  }
</style>

  <!-- Optional: Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
@endsection
