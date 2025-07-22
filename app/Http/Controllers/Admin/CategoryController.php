<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Services\CategoryService;
use Illuminate\Routing\Controller as BaseController;

class CategoryController extends BaseController
{
    protected $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->middleware('auth:admin');
        $this->categoryService = $categoryService;
    }

    public function index()
    {
        $categories = $this->categoryService->paginated();
        return view('admin.auth.Category.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.auth.Category.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name_en' => 'required|string|max:255',
            'name_it' => 'nullable|string|max:255',
            'status' => 'required|boolean',
        ]);

        $data = [
            'name' => json_encode([
                'en' => $request->input('name_en'),
                'it' => $request->input('name_it'),
            ]),
            'status' => $request->input('status'),
        ];

        $this->categoryService->create($data);

        return redirect()->route('admin.category.index')->with('success', 'Category created successfully.');
    }

    public function edit(Category $category)
    {
        $decodedName = json_decode($category->name, true);

        // Default empty if keys are missing
        $category->name_en = $decodedName['en'] ?? '';
        $category->name_it = $decodedName['it'] ?? '';

        return view('admin.auth.Category.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name_en' => 'required|string|max:255',
            'name_it' => 'nullable|string|max:255',
            'status' => 'required|boolean',
        ]);

        $data = [
            'name' => json_encode([
                'en' => $request->input('name_en'),
                'it' => $request->input('name_italic'),
            ]),
            'status' => $request->input('status'),
        ];

        $this->categoryService->update($category, $data);

        return redirect()->route('admin.category.index')->with('success', 'Category updated successfully.');
    }

    public function destroy(Category $category)
    {
        $this->categoryService->delete($category);
        return back()->with('success', 'Category deleted successfully.');
    }

    public function restore($id)
    {
        $this->categoryService->restore($id);
        return back()->with('success', 'Category restored successfully.');
    }

    public function toggleStatus(Category $category)
    {
        $this->categoryService->toggleStatus($category);
        return back()->with('success', 'Category status updated successfully.');
    }
}
