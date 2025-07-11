<?php
namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\OperationStatus;
use App\Models\Product;
use App\Models\Type;
use App\Services\ProductService;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class ProductController extends BaseController
{
    protected $service;

    public function __construct(ProductService $service)
    {
        $this->middleware('auth:admin');
        $this->service = $service;
    }

    public function index()
    {
        $products = $this->service->paginated();
        return view('admin.auth.pages.product.index', compact('products'));

    }

    public function create()
    {
        $nations = [
            'Italy', 'France', 'Germany', 'United States', 'India', 'China', 'Brazil',
        ];

        $regions = [
            'Lazio', 'Lombardy', 'Tuscany', 'Piedmont', 'Sicily', 'Veneto', 'Sardinia',
        ];

        $categories        = Category::where('status', 'active')->get();
        $types             = Type::where('status', 'active')->get();
        $operationStatuses = OperationStatus::where('status', 'active')->get();

        return view('admin.auth.pages.product.create', compact('categories', 'types', 'operationStatuses','nations','regions'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'               => 'required|string|max:191',
            'description'         => 'nullable|string',
            'reference_code'      => 'nullable|string|max:191',
            'operation_code'      => 'nullable|string|max:191',
            'nation'              => 'nullable|string|max:191',
            'region'              => 'nullable|string|max:191',
            'sector'              => 'nullable|string|max:191',
            'type_of_system'      => 'nullable|string|max:191',
            // 'type_of_operation'   => 'nullable|string|max:191',
            // 'min_value'           => 'nullable|numeric|min:0',
            // 'max_value'           => 'nullable|numeric|min:0|gte:min_value',
            'buy_sell'            => 'required|in:buy,sell',
            // 'is_active'           => 'required|boolean',
            'images'              => 'nullable|string|max:255', // Or use 'array' if storing multiple images as JSON
            'pdfs'                => 'nullable|string',         // Adjust if you’re handling it as an array
            'category_id'         => 'required|exists:categories,id',
            'type_id'             => 'required|exists:types,id',
            'operation_status_id' => 'required|exists:operation_statuses,id',
        ]);

        if ($request->hasFile('images')) {
            $validated['images'] = $request->file('images')->store('products', 'public');
        }

        $this->service->create($validated);

        return redirect()->route('admin.products.index')->with('success', 'Product created successfully.');
    }

    public function edit(Product $product)
    {
        $categories = Category::where('status', 'active')->get();
        $types      = Type::where('status', 'active')->get();
        $statuses   = OperationStatus::where('status', 'active')->get();

        return view('admin.auth.pages.product.edit', compact('product', 'categories', 'types', 'statuses'));
    }

    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'title'               => 'required|string|max:191',
            'description'         => 'nullable|string',
            'reference_code'      => 'nullable|string|max:191',
            'operation_code'      => 'nullable|string|max:191',
            'nation'              => 'nullable|string|max:191',
            'region'              => 'nullable|string|max:191',
            'sector'              => 'nullable|string|max:191',
            'type_of_system'      => 'nullable|string|max:191',
            // 'type_of_operation'   => 'nullable|string|max:191',
            // 'min_value'           => 'nullable|numeric|min:0',
            // 'max_value'           => 'nullable|numeric|min:0|gte:min_value',
            'buy_sell'            => 'required|in:buy,sell',
            // 'is_active'           => 'required|boolean',
            'images'              => 'nullable|string|max:255', // Or use 'array' if storing multiple images as JSON
            'pdfs'                => 'nullable|string',         // Adjust if you’re handling it as an array
            'category_id'         => 'required|exists:categories,id',
            'type_id'             => 'required|exists:types,id',
            'operation_status_id' => 'required|exists:operation_statuses,id',
        ]);
        $imagePaths = is_array($product->images) ? $product->images : json_decode($product->images, true) ?? [];

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $img) {
                $imagePaths[] = $img->store('products', 'public');
            }
        }

        $validated['images'] = $imagePaths;

        $this->service->update($product, $validated);

        return redirect()->route('admin.products.index')->with('success', 'Product updated successfully.');
    }

    public function destroy(Product $product)
    {
        $this->service->delete($product);
        return back()->with('success', 'Product deleted successfully.');
    }
    public function productmenu(Request $request)
    {
        $products = Product::query()
            ->when($request->category_id, fn($q) => $q->where('category_id', $request->category_id))
            ->when($request->type_id, fn($q) => $q->where('type_id', $request->type_id))
            ->when($request->buy_sell, fn($q) => $q->where('buy_sell', $request->buy_sell))
            -> when($request->nation, fn($q) => $q->where('nation', $request->nation))
            ->when($request->region, fn($q) => $q->where('region', $request->region))
            ->when($request->operation_status_id, fn($q) => $q->where('operation_status_id', $request->operation_status_id))
            ->whereHas('category', fn($q) => $q->where('status', 'active'))
            ->whereHas('type', fn($q) => $q->where('status', 'active'))
            ->whereHas('operationStatus', fn($q) => $q->where('status', 'active'))
            ->latest()
            ->paginate(9);
        return view('admin.auth.pages.product.product-list', [
            'products'   => $products,
            'categories' => Category::where('status', 'active')->get(),
            'types'      => Type::where('status', 'active')->get(),
            'statuses'   => OperationStatus::where('status', 'active')->get(),
        ]);
    }

}
