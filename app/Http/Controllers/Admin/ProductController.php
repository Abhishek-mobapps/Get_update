<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Models\Type;
use App\Models\Category;
use App\Models\OperationStatus;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use App\Services\ProductService;

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
        $categories = Category::where('status', 'active')->get();
        $types = Type::where('status', 'active')->get();
        $operationStatuses = OperationStatus::where('status', 'active')->get();

        return view('admin.auth.pages.product.create', compact('categories', 'types', 'operationStatuses'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'price' => 'required|numeric|min:0',
            'buy_sell' => 'required|in:buy,sell',
            'category_id' => 'required|exists:categories,id',
            'type_id' => 'required|exists:types,id',
            'operation_status_id' => 'required|exists:operation_statuses,id',
        ]);

        $imagePaths = [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $img) {
                $imagePaths[] = $img->store('products', 'public');
            }
        }

        $validated['images'] = $imagePaths;

        $this->service->create($validated); 

        return redirect()->route('admin.products.index')->with('success', 'Product created successfully.');
    }

    public function edit(Product $product)
    {
        $categories = Category::where('status', 'active')->get();
        $types = Type::where('status', 'active')->get();
        $statuses = OperationStatus::where('status', 'active')->get();

        return view('admin.auth.pages.product.edit', compact('product', 'categories', 'types', 'statuses'));
    }

    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'price' => 'required|numeric|min:0',
            'buy_sell' => 'required|in:buy,sell',
            'category_id' => 'required|exists:categories,id',
            'type_id' => 'required|exists:types,id',
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

    public function productmenu(Request $request){
        $products = Product::query()
        ->when($request->category_id, fn($q) => $q->where('category_id', $request->category_id))
        ->when($request->type_id, fn($q) => $q->where('type_id', $request->type_id))
        ->when($request->buy_sell, fn($q) => $q->where('buy_sell', $request->buy_sell))
        ->when($request->operation_status_id, fn($q) => $q->where('operation_status_id', $request->operation_status_id))
        ->whereHas('category', fn($q) => $q->where('status', 'active'))
        ->whereHas('type', fn($q) => $q->where('status', 'active'))
        ->whereHas('operationStatus', fn($q) => $q->where('status', 'active'))
        ->latest()
        ->paginate(9);

         return view('admin.auth.pages.product.product-list', [
        'products' => $products,
        'categories' => Category::where('status', 'active')->get(),
        'types' => Type::where('status', 'active')->get(),
        'statuses' => OperationStatus::where('status', 'active')->get(),
    ]);
    }
}
