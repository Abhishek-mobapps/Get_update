<?php
namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Models\Type;
use App\Models\Category;
use App\Models\OperationStatus;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use App\Services\ProductService;
use Illuminate\Support\Facades\Storage;

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
        return view('admin.auth.pages.product.create',compact('categories','types','operationStatuses'));

    // return view('admin.auth.pages.product.create', compact('categories', 'types', 'operationStatuses'));
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
        return redirect()->route('admin.products.index')->with('success', 'Product created.');
    }

    public function edit(Product $product)
    {
        return view('admin.product.edit', [
            'product' => $product,
            'categories' => Category::where('status', 'active')->get(),
            'types' => Type::where('status', 'active')->get(),
            'statuses' => OperationStatus::where('status', 'active')->get()
        ]);
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

        $imagePaths = $product->images ?? [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $img) {
                $imagePaths[] = $img->store('products', 'public');
            }
        }
        $validated['images'] = $imagePaths;

        $this->service->update($product, $validated);
        return redirect()->route('admin.products.index')->with('success', 'Product updated.');
    }

    public function destroy(Product $product)
    {
        $this->service->delete($product);
        return back()->with('success', 'Product deleted.');
    }
}
