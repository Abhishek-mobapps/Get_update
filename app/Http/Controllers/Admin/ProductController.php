<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\OperationStatus;
use App\Models\Product;
use App\Models\Nation;
use App\Models\Sector;
use App\Models\Region;
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
        $nations = Nation::all();
        $regions = Region::all();
        $sectors = Sector::all();
        $categories = Category::where('status', 'active')->get();
        $types = Type::where('status', 'active')->get();
        $operationStatuses = OperationStatus::where('status', 'active')->get();

        return view('admin.auth.pages.product.create', compact(
            'categories', 'types', 'operationStatuses', 'nations', 'regions', 'sectors'
        ));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'               => 'required|string|max:191',
            'description'         => 'nullable|string',
            'reference_code'      => 'nullable|string|max:191',
            'operation_code'      => 'nullable|string|max:191',
            // 'currency'            => 'nullable|string|max:10',
            'value_from'           =>'required|string|max:191',
            'value_to'           =>  'nullable|string|max:191',
            'type_of_system'      => 'nullable|string|max:191',
            'type_of_operation'   => 'nullable|string|max:191',
            'buy_sell'            => 'required|in:buy,sell',
            'images'               => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'pdf.*'              => 'nullable|mimes:pdf|max:2048',
            'category_id'         => 'required|exists:categories,id',
            'type_id'             => 'required|exists:types,id',
            'sector_id'           => 'required|exists:sectors,id',
            'nation_id'           => 'required|exists:nations,id',
            'region_id'           => 'required|exists:regions,id',
            'operation_status_id' => 'required|exists:operation_statuses,id',
        ]);

        if ($request->hasFile('images')) {
            $validated['images'] = $request->file('images')->store('products/images', 'public');
        }

        $pdfPaths = [];
        if ($request->hasFile('pdf')) {
            foreach ($request->file('pdf') as $pdf) {
                $pdfPaths[] = $pdf->store('products/pdf', 'public');
            }
        }

        $validated['pdf'] = json_encode($pdfPaths);

        $this->service->create($validated);

        return redirect()->route('admin.products.index')->with('success', 'Product created successfully.');
    }

    public function edit(Product $product)
    {
        $nations = Nation::all();
        $regions = Region::all();
        $sectors = Sector::all();
        $categories = Category::where('status', 'active')->get();
        $types = Type::where('status', 'active')->get();
        $operationStatuses = OperationStatus::where('status', 'active')->get();

        return view('admin.auth.pages.product.edit', compact(
            'product', 'categories', 'types', 'operationStatuses', 'nations', 'regions', 'sectors'
        ));
    }

    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'title'               => 'required|string|max:191',
            'description'         => 'nullable|string',
            'reference_code'      => 'nullable|string|max:191',
            'operation_code'      => 'nullable|string|max:191',
            // 'currency'            => 'nullable|string|max:10',
             'value_from'           =>'required|string|max:191',
             'value_to'           =>  'nullable|string|max:191',
            'type_of_system'      => 'nullable|string|max:191',
            'type_of_operation'   => 'nullable|string|max:191',
            'buy_sell'            => 'required|in:buy,sell',
            'images'               => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'pdf.*'              => 'nullable|mimes:pdf|max:2048',
            'category_id'         => 'required|exists:categories,id',
            'type_id'             => 'required|exists:types,id',
            'sector_id'           => 'required|exists:sectors,id',
            'nation_id'           => 'required|exists:nations,id',
            'region_id'           => 'required|exists:regions,id',
            'operation_status_id' => 'required|exists:operation_statuses,id',
        ]);

        if ($request->hasFile('images')) {
            $validated['images'] = $request->file('images')->store('products/images', 'public');
        } else {
            $validated['imagess'] = $product->images;
        }

        $existingPDFs = json_decode($product->pdf ?? '[]', true);
        $newPDFs = [];

        if ($request->hasFile('pdf')) {
            foreach ($request->file('pdf') as $pdfs) {
                $newPDFs[] = $pdfs->store('products/pdf', 'public');
            }
        }

        $validated['pdf'] = json_encode(array_merge($existingPDFs, $newPDFs));

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
            ->when($request->nation_id, fn($q) => $q->where('nation_id', $request->nation_id))
            ->when($request->region_id, fn($q) => $q->where('region_id', $request->region_id))
            ->when($request->sector_id, fn($q) => $q->where('sector_id', $request->sector_id))
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
