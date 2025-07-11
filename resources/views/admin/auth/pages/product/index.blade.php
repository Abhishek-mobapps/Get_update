@extends('admin.auth.dashboard')

@section('content')
    <div class="container">
        <h4>Product List</h4>

        <a href="{{ route('admin.products.create') }}" class="btn btn-primary mb-3">Add Product</a>
        <a href="{{ route('admin.productmenu') }}" class="btn btn-primary mb-3">Product List</a>
        @if (session('success'))
            <div id="flash-message" class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>

            <script>
                // Auto-fade after 3 seconds
                setTimeout(() => {
                    let alert = document.getElementById('flash-message');
                    if (alert) {
                        alert.style.transition = "opacity 0.5s ease-out";
                        alert.style.opacity = "0";

                        // Remove completely after fade
                        setTimeout(() => alert.remove(), 500);
                    }
                }, 3000); // 3 seconds
            </script>
        @endif

        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Sr No</th>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Reference Code</th>
                    <th>Nation</th>
                    <th>Region</th>
                    <th>Sector</th>
                    <th>System Type</th>
                    <th>Description</th>
                    <th>Category</th>
                    <th>Type</th>
                    <th>Op. Status</th>
                    <th>Buy/Sell</th>
                    <th>Price</th>

                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($products as $index=>$product)
                    <tr>
                        <td class="text-center">{{$index+1}}</td>
                        <td>
                            <img src="{{ $product->images ? asset('storage/' . $product->images) : asset('assets/images/no-image.png') }}"
                                alt="Product Image" width="100" height="100" style="object-fit: cover;">

                        </td>
                        <td>{{ $product->title }}</td>
                        <td>{{ $product->refrence_code }}</td>
                        <td>{{ $product->naation }}</td>
                        <td>{{ $product->region }}</td>
                        <td>{{ $product->sector }}</td>
                        <td>{{ $product->type_of_system }}</td>
                        <td>{!! $product->description !!}</td>
                        <td>{{ $product->category->name ?? '-' }}</td>
                        <td>{{ $product->type->name ?? '-' }}</td>
                        <td>{{ $product->operationStatus->name ?? '-' }}</td>
                        <td>{{ ucfirst($product->buy_sell) }}</td>
                        <td>₹{{ $product->price }}</td>
                        <td class="text-center align-middle">
                            <div class="d-flex justify-content-center align-items-center" style="gap: 10px;">
                                <!-- Edit (Bootstrap Icon) -->
                                <a href="{{ route('admin.products.edit', $product) }}" title="Edit"
                                    class="text-primary d-flex align-items-center">
                                    <i class="bi bi-pencil-square fs-5"></i>
                                </a>

                                <!-- Delete (Bootstrap Icon) -->
                                <form action="{{ route('admin.products.destroy', $product) }}" method="POST"
                                    onsubmit="return confirm('Delete product?')" style="margin: 0;"
                                    class="d-flex align-items-center">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn p-0 m-0 border-0 bg-transparent text-danger"
                                        title="Delete">
                                        <i class="bi bi-trash-fill fs-5"></i>
                                    </button>
                                </form>
                            </div>
                        </td>

                    </tr>
                @empty
                    <tr>
                        <td colspan="8">No products found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        <div class="d-flex justify-content-center mt-4">
            {{ $products->links('pagination::bootstrap-5') }}
        </div>
    </div>
@endsection
