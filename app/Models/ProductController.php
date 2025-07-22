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
use Illuminate\Support\Facades\Storage;

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
        foreach ($products as $product) {
        $product->imageExists = $product->images && Storage::disk('public')->exists($product->images);
    }
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

//     public function store(Request $request)
//     {
//         $validated = $request->validate([
//             'title'               => 'required|string|max:191',
//             'description'         => 'nullable|string',
//             'reference_code'      => 'nullable|string|max:191',
//             'operation_code'      => 'nullable|string|max:191',
//             // 'currency'            => 'nullable|string|max:10',
//             'value_from'           =>'required|string|max:191',
//             'value_to'           =>  'nullable|string|max:191',
//             'type_of_system'      => 'nullable|string|max:191',
//             'type_of_operation'   => 'nullable|string|max:191',
//             'buy_sell'            => 'required|in:buy,sell',
//             'images'               => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
//             'pdf.*'              => 'nullable|mimes:pdf|max:2048',
//             'category_id'         => 'required|exists:categories,id',
//             'type_id'             => 'required|exists:types,id',
//             'sector_id'           => 'required|exists:sectors,id',
//             'nation_id'           => 'required|exists:nations,id',
//             'region_id'           => 'required|exists:regions,id',
//             'operation_status_id' => 'required|exists:operation_statuses,id',
//         ]);

//         if ($request->hasFile('images')) {
//             $validated['images'] = $request->file('images')->store('products/images', 'public');
//         }
//         $pdfPaths = [];

// if ($request->hasFile('pdf')) {
//     foreach ($request->file('pdf') as $pdfFile) {
//         $path = $pdfFile->store('uploads/pdf', 'public'); // stores in storage/app/public/uploads/pdf
//         $pdfPaths[] = $path;
//     }
// }

// $product = new Product();
// $product->name = $request->name;
// // other fields...
// $product->pdf = json_encode($pdfPaths); // store as JSON
// $product->save();

//         return redirect()->route('admin.products.index')->with('success', 'Product created successfully.');
//     }


   public function store(Request $request)
{
    $validated = $request->validate([
        'title'               => 'required|string|max:191',
        'description'         => 'nullable|string',
        'reference_code'      => 'nullable|string|max:191',
        'operation_code'      => 'nullable|string|max:191',
        'value_from'          => 'required|string|max:191',
        'value_to'            => 'nullable|string|max:191',
        'type_of_system'      => 'nullable|string|max:191',
        'type_of_operation'   => 'nullable|string|max:191',
        'buy_sell'            => 'required|in:buy,sell',
        'images'              => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        'pdf.*'               => 'nullable|file|mimes:pdf|max:2048',
        'category_id'         => 'required|exists:categories,id',
        'type_id'             => 'required|exists:types,id',
        'sector_id'           => 'required|exists:sectors,id',
        'nation_id'           => 'required|exists:nations,id',
        'region_id'           => 'required|exists:regions,id',
        'operation_status_id' => 'required|exists:operation_statuses,id',
    ]);

    $product = new Product();

    // Image upload
    if ($request->hasFile('images')) {
        $validated['images'] = $request->file('images')->store('products/images', 'public');
    }

    // PDF upload

    // Assign values
    $product->title = $validated['title'];
    $product->description = isset($validated['description'])
    ? Purifier::clean($validated['description']) // ✅ Sanitize HTML here
    : null;
    $product->description = $validated['description'] ?? null;
    $product->reference_code = $validated['reference_code'] ?? null;
    $product->operation_code = $validated['operation_code'] ?? null;
    $product->value_from = $validated['value_from'];
    $product->value_to = $validated['value_to'] ?? null;
    $product->type_of_system = $validated['type_of_system'] ?? null;
    $product->type_of_operation = $validated['type_of_operation'] ?? null;
    $product->buy_sell = $validated['buy_sell'];
    $product->images = $validated['images'] ?? null;
    $product->pdf = json_encode($pdfPaths);
    $product->category_id = $validated['category_id'];
    $product->type_id = $validated['type_id'];
    $product->sector_id = $validated['sector_id'];
    $product->nation_id = $validated['nation_id'];
    $product->region_id = $validated['region_id'];
    $product->operation_status_id = $validated['operation_status_id'];


    $pdfPaths = [];

if ($request->hasFile('pdfs')) {
    foreach ($request->file('pdfs') as $pdf) {
        if ($pdf && $pdf->isValid()) {
            $path = $pdf->store('pdfs', 'public');
            $pdfPaths[] = $path;
        }
    }
}

$product->pdf = json_encode($pdfPaths); // Always defined now, even if empty


    $product->save();

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

//     public function update(Request $request, Product $product)
//     {
//         $validated = $request->validate([
//             'title'               => 'required|string|max:191',
//             'description'         => 'nullable|string',
//             'reference_code'      => 'nullable|string|max:191',
//             'operation_code'      => 'nullable|string|max:191',
//             // 'currency'            => 'nullable|string|max:10',
//              'value_from'           =>'required|string|max:191',
//              'value_to'           =>  'nullable|string|max:191',
//             'type_of_system'      => 'nullable|string|max:191',
//             'type_of_operation'   => 'nullable|string|max:191',
//             'buy_sell'            => 'required|in:buy,sell',
//             'images'               => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
//             'pdf.*'              => 'nullable|mimes:pdf|max:2048',
//             'category_id'         => 'required|exists:categories,id',
//             'type_id'             => 'required|exists:types,id',
//             'sector_id'           => 'required|exists:sectors,id',
//             'nation_id'           => 'required|exists:nations,id',
//             'region_id'           => 'required|exists:regions,id',
//             'operation_status_id' => 'required|exists:operation_statuses,id',
//         ]);

//         if ($request->hasFile('images')) {
//             $validated['images'] = $request->file('images')->store('products/images', 'public');
//         } else {
//             $validated['imagess'] = $product->images;
//         }


//         $pdfPaths = [];

// if ($request->hasFile('pdf')) {
//     foreach ($request->file('pdf') as $pdfFile) {
//         $path = $pdfFile->store('uploads/pdf', 'public'); // stores in storage/app/public/uploads/pdf
//         $pdfPaths[] = $path;
//     }
// }

// $product = new Product();
// $product->name = $request->name;
// // other fields...
// $product->pdf = json_encode($pdfPaths); // store as JSON
// $product->save();


// //         $existingPDFs = json_decode($product->pdf ?? '[]', true); // decode existing (if any)
// // $newPDFs = [];

// // if ($request->hasFile('pdf')) {
// //     foreach ($request->file('pdf') as $pdf) {
// //         $filename = $pdf->getClientOriginalName();
// //         $pdf->storeAs('products/pdf', $filename, 'public'); // store with original name
// //         $newPDFs[] = $filename; // store only name
// //     }
// // }

// // $validated['pdf'] = json_encode(array_merge($existingPDFs, $newPDFs));


// //         $this->service->update($product, $validated);

//         return redirect()->route('admin.products.index')->with('success', 'Product updated successfully.');
//     }


    public function update(Request $request, Product $product)
{
    $validated = $request->validate([
        'title'               => 'nullable|string|max:191',
        'description'         => 'nullable|string',
        'reference_code'      => 'nullable|string|max:191',
        'operation_code'      => 'nullable|string|max:191',
        'value_from'          => 'nullable|string|max:191',
        'value_to'            => 'nullable|string|max:191',
        'type_of_system'      => 'nullable|string|max:191',
        'type_of_operation'   => 'nullable|string|max:191',
        'buy_sell'            => 'nullable|in:buy,sell',
        'images'              => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        'pdf.*'               => 'nullable|mimes:pdf|max:2048',
        'category_id'         => 'nullable|exists:categories,id',
        'type_id'             => 'nullable|exists:types,id',
        'sector_id'           => 'nullable|exists:sectors,id',
        'nation_id'           => 'nullable|exists:nations,id',
        'region_id'           => 'nullable|exists:regions,id',
        'operation_status_id' => 'nullable|exists:operation_statuses,id',
    ]);

    if ($request->hasFile('images')) {
        $validated['images'] = $request->file('images')->store('products/images', 'public');
    } else {
        $validated['images'] = $product->images;
    }

    $pdfPaths = json_decode($product->pdf ?? '[]', true);

    if ($request->hasFile('pdf')) {
        foreach ($request->file('pdf') as $pdfFile) {
            $path = $pdfFile->store('uploads/pdf', 'public');
            $pdfPaths[] = $path;
        }
    }

    $product->title = $validated['title'];
    $product->description = $validated['description'] ?? null;
    $product->reference_code = $validated['reference_code'] ?? null;
    $product->operation_code = $validated['operation_code'] ?? null;
    $product->value_from = $validated['value_from'];
    $product->value_to = $validated['value_to'] ?? null;
    $product->type_of_system = $validated['type_of_system'] ?? null;
    $product->type_of_operation = $validated['type_of_operation'] ?? null;
    $product->buy_sell = $validated['buy_sell'];
    $product->images = $validated['images'];
    $product->pdf = json_encode($pdfPaths);
    $product->category_id = $validated['category_id'];
    $product->type_id = $validated['type_id'];
    $product->sector_id = $validated['sector_id'];
    $product->nation_id = $validated['nation_id'];
    $product->region_id = $validated['region_id'];
    $product->operation_status_id = $validated['operation_status_id'];

    $product->save();

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

    public function show($id)
{
    // Load product with all related models based on your relationships
    $product = Product::with([
        'category', 
        'type', 
        'sector', 
        'nation', 
        'region', 
        'operationStatus', 
        // 'vendor'  // assuming you have vendor relation
    ])->findOrFail($id);

    // Handle images - assume stored as JSON array or single string
    if (empty($product->images)) {
        $images = [];
    } elseif (is_array($product->images)) {
        $images = $product->images;
    } else {
        $decodedImages = json_decode($product->images, true);
        $images = is_array($decodedImages) ? $decodedImages : [$product->images];
    }

    // Handle PDFs - same logic
    if (empty($product->pdf)) {
        $pdfs = [];
    } elseif (is_array($product->pdf)) {
        $pdfs = $product->pdf;
    } else {
        $decodedPdfs = json_decode($product->pdf, true);
        $pdfs = is_array($decodedPdfs) ? $decodedPdfs : [$product->pdf];
    }

    return view('admin.auth.pages.product.show', compact('product', 'images', 'pdfs'));
  }
}
