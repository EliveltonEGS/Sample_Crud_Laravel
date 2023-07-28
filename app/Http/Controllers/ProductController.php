<?php

namespace App\Http\Controllers;

use App\DTO\Product\StoreProductDTO;
use App\DTO\Product\UpdateProductDTO;
use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use App\Service\CategoryService;
use App\Service\ProductService;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct(
        protected ProductService $productService,
        protected CategoryService $categoryService
    ) {}

    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
    {
        $result = $this->productService->get();
        return view('product.index', compact('result'))->with(['title' => 'Product List']);
    }

    public function create(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
    {
        $result = Category::orderBy('name')->get();
        return view('product.create', compact('result'))->with(['title' => 'Product Create']);
    }

    public function store(ProductRequest $request)
    {
        //Product::create($request->all());
        $this->productService->store(StoreProductDTO::makeFromRequest($request));
        return redirect()->route('product.index');
    }

    public function show(int $id): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
    {
        $product = $this->productService->show($id);
        $category = $this->categoryService->get();
        return view('product.delete', compact('product', 'category'))->with(['title' => 'Product Delete']);
    }

    public function delete(Request $request): \Illuminate\Http\RedirectResponse
    {
        $this->productService->delete($request->get('id'));
        return redirect()->route('product.index');
    }

    public function edit(int $id): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
    {
        $product = $this->productService->show($id);
        $category = $this->categoryService->get();
        return view('product.edit', compact('product', 'category'))->with(['title' => 'Product Update']);
    }

    public function update(ProductRequest $request): \Illuminate\Http\RedirectResponse
    {
        $this->productService->update(UpdateProductDTO::makeFromRequest($request), $request->get('id'));
        return redirect()->route('product.index');
    }
}
