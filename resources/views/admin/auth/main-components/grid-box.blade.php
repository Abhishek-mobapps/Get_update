<div class="container-fluid px-4 mt-5">

    <!-- Large, Equal-Size, Animated Cards -->
    <div class="container px-2">
        <div class="row justify-content-center g-4 equal-height">
            <div class="col-12 col-sm-6 col-md-4 col-xl-3">
                <div class="card radius-10 bg-gradient-cosmic text-white text-center">
                    <div class="card-body">
                        <p class="mb-2">Total Categories</p>
                        <h4 class="my-2">
                            @php
                                use App\Models\Category;
                                $categoryCount = Category::whereNull('deleted_at')->count(); // If using soft deletes
                            @endphp
                                {{ $categoryCount }}
                        </h4>
                        {{-- <p class="mb-0">+2.5% from last week</p> --}}
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-xl-3">
                <div class="card radius-10 bg-gradient-ibiza text-white text-center">
                    <div class="card-body">
                        <p class="mb-2">Total Type</p>
                        <h4 class="my-2">
                          @php
                                use App\Models\Type;
                                $typeCount = Type::whereNull('deleted_at')->count(); // If using soft deletes
                            @endphp
                                {{ $typeCount }}
                        </h4>
                        {{-- <p class="mb-0">+5.4% from last week</p> --}}
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-xl-3">
                <div class="card radius-10 bg-gradient-ohhappiness text-white text-center">
                    <div class="card-body">
                        <p class="mb-2">Operation Status</p>
                        <h4 class="my-2">
                          @php
                                use App\Models\OperationStatus;
                                $operationCount = OperationStatus::whereNull('deleted_at')->count(); // If using soft deletes
                            @endphp
                                {{ $operationCount }}
                        </h4>
                        {{-- <p class="mb-0">-4.5% from last week</p> --}}
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-xl-3">
                <div class="card radius-10 bg-gradient-kyoto text-dark text-center">
                    <div class="card-body">
                        <p class="mb-2">Total Product</p>
                        <h4 class="my-2">
                        @php
                                use App\Models\Product;
                                $productCount = Product::whereNull('deleted_at')->count(); // If using soft deletes
                            @endphp
                                {{ $productCount }}
                        {{-- <p class="mb-0">+8.4% from last week</p> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
