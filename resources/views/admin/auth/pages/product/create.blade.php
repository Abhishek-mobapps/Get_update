@extends('admin.auth.dashboard')

@section('content')
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

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

            <div class="mb-3">
                <label for="title" class="form-label">Product Title</label>
                <input type="text" name="title" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="title" class="form-label">Reference Code</label>
                <input type="text" name="reference_code" class="form-control" required value">
            </div>

            <div class="mb-3">
                <label for="title" class="form-label">Sector</label>
                <input type="text" name="sector" class="form-control" required">
            </div>

            <div class="mb-3">
                <label for="type_of_system" class="form-label">System Type</label>
                <input type="text" name="type_of_system" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="title" class="form-label">Value</label>
                <input type="text" name="nation" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="category_id" class="form-label">Category</label>
                <select name="category_id" class="form-select">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="type_id" class="form-label">Type</label>
                <select name="type_id" class="form-select">
                    @foreach ($types as $type)
                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="operation_status_id" class="form-label">Operation Status</label>
                <select name="operation_status_id" class="form-select">
                    @foreach ($operationStatuses as $status)
                        <option value="{{ $status->id }}">{{ $status->name }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Nation Dropdown -->
            <div class="mb-3">
                <label for="nationInput" class="form-label">Nation</label>
                <div class="position-relative">
                    <input type="text" id="nationInput" class="form-control" placeholder="Search nation..."
                        oninput="filterNation()" onfocus="showNationDropdown()" autocomplete="off">
                    <ul class="list-group position-absolute w-100 shadow" id="nationDropdown"
                        style="display: none; z-index: 1000; max-height: 200px; overflow-y: auto;">
                        @foreach ($nations as $nation)
                            <li class="list-group-item list-group-item-action"
                                onclick="selectNation('{{ $nation }}')">{{ $nation }}</li>
                        @endforeach
                    </ul>
                    <input type="hidden" name="nation" id="nationHidden">
                </div>
            </div>

            <!-- Region Dropdown -->
            <div class="mb-3">
                <label for="regionInput" class="form-label">Region</label>
                <div class="position-relative">
                    <input type="text" id="regionInput" class="form-control" placeholder="Search region..."
                        oninput="filterRegion()" onfocus="showRegionDropdown()" autocomplete="off">
                    <ul class="list-group position-absolute w-100 shadow" id="regionDropdown"
                        style="display: none; z-index: 1000; max-height: 200px; overflow-y: auto;">
                        @foreach ($regions as $region)
                            <li class="list-group-item list-group-item-action"
                                onclick="selectRegion('{{ $region }}')">{{ $region }}</li>
                        @endforeach
                    </ul>
                    <input type="hidden" name="region" id="regionHidden">
                </div>
            </div>

            <div class="mb-3">
                <label for="buy_sell" class="form-label">Buy/Sell</label>
                <select name="buy_sell" class="form-select">
                    <option value="buy">Buy</option>
                    <option value="sell">Sell</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" name="price" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea rows="10" cols="50" id="description" name="description" class="form-control" required>
            </textarea>
            </div>

            <div class="mb-3">
                <label for="images" class="form-label">Upload Images</label>
                <input type="file" name="images" class="form-control" accept="image/*">
            </div>

            <button type="submit" class="btn btn-primary">Create Product</button>
        </form>
        <script src="https://cdn.ckeditor.com/4.25.1/lts/standard/ckeditor.js"></script>
        <script>
            CKEDITOR.replace('description');
        </script>

    </div>
    <!-- CKEditor 5 CDN -->
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>

    <script>
        ClassicEditor
            .create(document.querySelector('#description'))
            .catch(error => {
                console.error('CKEditor initialization error:', error);
            });
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


    <script>
    // --- NATION ---
    const nationInput = document.getElementById('nationInput');
    const nationDropdown = document.getElementById('nationDropdown');
    const nationHidden = document.getElementById('nationHidden');

    function showNationDropdown() {
        nationDropdown.style.display = 'block';
    }

    function filterNation() {
        const filter = nationInput.value.toLowerCase();
        const items = nationDropdown.querySelectorAll('li');
        let hasMatch = false;
        items.forEach(item => {
            const match = item.textContent.toLowerCase().includes(filter);
            item.style.display = match ? '' : 'none';
            if (match) hasMatch = true;
        });
        nationDropdown.style.display = hasMatch ? 'block' : 'none';
    }

    function selectNation(value) {
        nationInput.value = value;
        nationHidden.value = value;
        nationDropdown.style.display = 'none';
    }

    // --- REGION ---
    const regionInput = document.getElementById('regionInput');
    const regionDropdown = document.getElementById('regionDropdown');
    const regionHidden = document.getElementById('regionHidden');

    function showRegionDropdown() {
        regionDropdown.style.display = 'block';
    }

    function filterRegion() {
        const filter = regionInput.value.toLowerCase();
        const items = regionDropdown.querySelectorAll('li');
        let hasMatch = false;
        items.forEach(item => {
            const match = item.textContent.toLowerCase().includes(filter);
            item.style.display = match ? '' : 'none';
            if (match) hasMatch = true;
        });
        regionDropdown.style.display = hasMatch ? 'block' : 'none';
    }

    function selectRegion(value) {
        regionInput.value = value;
        regionHidden.value = value;
        regionDropdown.style.display = 'none';
    }

    // --- CLOSE dropdowns if clicked outside ---
    document.addEventListener('click', function (e) {
        if (!e.target.closest('.position-relative')) {
            nationDropdown.style.display = 'none';
            regionDropdown.style.display = 'none';
        }
    });
</script>

@endsection
