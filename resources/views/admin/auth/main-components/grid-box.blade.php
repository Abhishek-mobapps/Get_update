@extends('admin.auth.dashboard')

@section('content')
<div class="container-fluid mt-4">

    <!-- Stat Cards Row -->
    <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4 g-4 justify-content-center">

        <!-- Category Card -->
        <div class="col">
            <div class="card radius-10 border-start border-0 border-4 border-info h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <p class="mb-0 text-secondary">Total Categories</p>
                            <h4 class="my-1 text-info">
                                @php
                                    use App\Models\Category;
                                    $categoryCount = Category::whereNull('deleted_at')->count();
                                @endphp
                                {{ $categoryCount }}
                            </h4>
                        </div>
                        <div class="widgets-icons-2 rounded-circle bg-gradient-blues text-white ms-auto">
                            <i class='bx bxs-cart'></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Type Card -->
        <div class="col">
            <div class="card radius-10 border-start border-0 border-4 border-danger h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <p class="mb-0 text-secondary">Total Types</p>
                            <h4 class="my-1 text-danger">
                                @php
                                    use App\Models\Type;
                                    $typeCount = Type::whereNull('deleted_at')->count();
                                @endphp
                                {{ $typeCount }}
                            </h4>
                        </div>
                        <div class="widgets-icons-2 rounded-circle bg-gradient-burning text-white ms-auto">
                            <i class='bx bxs-wallet'></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Operation Status Card -->
        <div class="col">
            <div class="card radius-10 border-start border-0 border-4 border-success h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <p class="mb-0 text-secondary">Operation Status</p>
                            <h4 class="my-1 text-success">
                                @php
                                    use App\Models\OperationStatus;
                                    $operationCount = OperationStatus::whereNull('deleted_at')->count();
                                @endphp
                                {{ $operationCount }}
                            </h4>
                        </div>
                        <div class="widgets-icons-2 rounded-circle bg-gradient-ohhappiness text-white ms-auto">
                            <i class='bx bxs-bar-chart-alt-2'></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Product Card -->
        <div class="col">
            <div class="card radius-10 border-start border-0 border-4 border-warning h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <p class="mb-0 text-secondary">Total Products</p>
                            <h4 class="my-1 text-warning">
                                @php
                                    use App\Models\Product;
                                    $productCount = Product::whereNull('deleted_at')->count();
                                @endphp
                                {{ $productCount }}
                            </h4>
                        </div>
                        <div class="widgets-icons-2 rounded-circle bg-gradient-orange text-white ms-auto">
                            <i class='bx bxs-group'></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
