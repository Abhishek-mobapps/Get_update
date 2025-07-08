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
        $request->validate(['name' => 'required|string|unique:categories']);

        $this->categoryService->create($request->only(['name', 'description', 'status']));
        return redirect()->route('admin.category.index')->with('success', 'Category created.');
    }

    public function edit(Category $category)
    {
        return view('admin.auth.Category.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $request->validate(['name' => 'required|string|unique:categories,name,' . $category->id]);

        $this->categoryService->update($category, $request->only(['name', 'description', 'status']));
        return redirect()->route('admin.category.index')->with('success', 'Category updated.');
    }

    public function destroy(Category $category)
    {
        $this->categoryService->delete($category);
        return back()->with('success', 'Category deleted.');
    }

    public function restore($id)
    {
        $this->categoryService->restore($id);
        return back()->with('success', 'Category restored.');
    }

    public function toggleStatus(Category $category)
    {
        $this->categoryService->toggleStatus($category);
        return back()->with('success', 'Category status updated.');
    }
}
