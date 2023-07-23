<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory 
    {
        $result = Product::with('category')->orderBy('id', 'desc')->get();
        return view('product.index', compact('result'))->with(['title' => 'Product List']);
    }

    public function create(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory 
    {
        $result = Category::orderBy('name')->get();
        return view('product.create', compact('result'))->with(['title' => 'Product Create']);
    }

    public function store(ProductRequest $request)
    {
        Product::create($request->all());
        return redirect()->route('product.index');
    }

    public function show(int $id): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory 
    {
        $product = Product::find($id);
        $category = Category::all();
        return view('product.delete', compact('product', 'category'))->with(['title' => 'Product Delete']);
    }

    public function delete(Request $request): \Illuminate\Http\RedirectResponse
    {
        Product::destroy($request->get('id'));
        return redirect()->route('product.index');
    }

    public function edit(int $id): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory 
    {
        $product = Product::find($id);
        $category = Category::all();
        return view('product.edit', compact('product', 'category'))->with(['title' => 'Product Update']);
    }

    public function update(ProductRequest $request): \Illuminate\Http\RedirectResponse
    {
        Product::find($request->get('id'))->update($request->only('name', 'ean', 'amount', 'price', 'category_id'));
        return redirect()->route('product.index');
    }
}
