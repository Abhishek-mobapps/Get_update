<?php

namespace App\Http\Controllers\Admin;

// use App\Http\Controllers\Controller;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Product;
use App\Services\ProductService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends BaseController
{
    protected $productService;

    public function __construct(ProductService $productService)
    {
        $this->middleware('auth:admin');
        $this->productService = $productService;
    }

    public function index(Request $request)
    {
        $query = Product::query();

        if ($search = $request->input('search')) {
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('product_tags', 'like', "%{$search}%");
            });
        }

        if ($collection = $request->input('collection')) {
            $query->where('collection', $collection);
        }

        if ($price_min = $request->input('price_min')) {
            $query->where('price', '>=', $price_min);
        }

        if ($price_max = $request->input('price_max')) {
            $query->where('price', '<=', $price_max);
        }

        $allowedSorts = ['price', 'created_at', 'title', 'star_points'];
        $sort = $request->input('sort');
        $direction = $request->input('direction', 'asc');

        if (in_array($sort, $allowedSorts)) {
            $query->orderBy($sort, $direction);
        } else {
            $query->orderBy('created_at', 'desc');
        }

        $products = $query->paginate(10)->withQueryString();

        $collections = Product::select('collection')->distinct()->pluck('collection')->filter();

        return view('admin.auth.products.index', compact('products', 'collections'));
    }

    public function create()
    {
        return view('admin.products.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'           => 'required|string|max:255',
            'description'     => 'nullable|string',
            'images.*'        => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'price'           => 'required|numeric|min:0',
            'compare_at_price'=> 'nullable|numeric|min:0',
            'cost_per_price'  => 'nullable|numeric|min:0',
            'star_points'     => 'nullable|numeric|min:0',
            'product_type'    => 'nullable|string|max:255',
            'vendor'          => 'nullable|string|max:255',
            'collection'      => 'nullable|string|max:255',
            'product_tags'    => 'nullable|string|max:255',
        ]);

        $imagePaths = [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $img) {
                $path = $img->store('products', 'public');
                $imagePaths[] = $path;
            }
        }
        $validated['images'] = $imagePaths;

        $this->productService->create($validated);

        return redirect()->route('admin.products.index')->with('success', 'Product created successfully!');
    }

    public function edit(Product $product)
    {
        return view('admin.products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'title'           => 'required|string|max:255',
            'description'     => 'nullable|string',
            'images.*'        => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'price'           => 'required|numeric|min:0',
            'compare_at_price'=> 'nullable|numeric|min:0',
            'cost_per_price'  => 'nullable|numeric|min:0',
            'star_points'     => 'nullable|numeric|min:0',
            'product_type'    => 'nullable|string|max:255',
            'vendor'          => 'nullable|string|max:255',
            'collection'      => 'nullable|string|max:255',
            'product_tags'    => 'nullable|string|max:255',
        ]);

        $imagePaths = $product->images ?? [];

        if ($request->hasFile('images')) {
            // Append new images
            foreach ($request->file('images') as $img) {
                $path = $img->store('products', 'public');
                $imagePaths[] = $path;
            }
        }

        $validated['images'] = $imagePaths;

        $this->productService->update($product, $validated);

        return redirect()->route('admin.products.index')->with('success', 'Product updated successfully!');
    }

    public function destroy(Product $product)
    {
        $this->productService->delete($product);

        return redirect()->route('admin.products.index')->with('success', 'Product deleted (soft) successfully!');
    }
}
