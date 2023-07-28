<?php

namespace App\Http\Controllers;

use App\DTO\Category\StoreCategoryDTO;
use App\DTO\Category\UpdateCategoryDTO;
use App\Http\Requests\CategoryRequest;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Service\CategoryService;

class CategoryController extends Controller
{
    public function __construct(
        protected CategoryService $categoryService
    ) {}
    
    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory 
    {
        $result = $this->categoryService->get();
        return view('category.index', compact('result'))->with(['title' => 'Category List']);
    }

    public function create(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory 
    {
        return view('category.create')->with(['title' => 'Category Create']);
    }

    public function store(CategoryRequest $request): \Illuminate\Http\RedirectResponse
    {
        $this->categoryService->store(StoreCategoryDTO::makeFromRequest($request));
        return redirect()->route('category.index');
    }

    public function show(int $id): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory 
    {
        $result = $this->categoryService->show($id);
        return view('category.delete', compact('result'))->with(['title' => 'Category Delete']);
    }

    public function delete(Request $request): \Illuminate\Http\RedirectResponse
    {
        // Category::destroy($request->get('id'));
        $this->categoryService->delete($request->get('id'));
        return redirect()->route('category.index');
    }

    public function edit(int $id): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory 
    {
        $result = $this->categoryService->show($id);
        return view('category.edit', compact('result'))->with(['title' => 'Category Update']);
    }

    public function update(CategoryRequest $request): \Illuminate\Http\RedirectResponse
    {
        $this->categoryService->update(UpdateCategoryDTO::makeFromRequest($request));
        return redirect()->route('category.index');
    }
}
