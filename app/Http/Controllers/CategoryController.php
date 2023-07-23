<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Date;

class CategoryController extends Controller
{
    
    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory 
    {
        $result = Category::orderBy('id', 'desc')->get();
        return view('category.index', compact('result'))->with(['title' => 'Category List']);
    }

    public function create(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory 
    {
        return view('category.create')->with(['title' => 'Category Create']);
    }

    public function store(Request $request)
    {
        Category::create($request->all());
        return redirect()->route('category.index');
    }

    public function show(int $id): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory 
    {
        $result = Category::find($id);
        return view('category.delete', compact('result'))->with(['title' => 'Category Delete']);
    }

    public function delete(Request $request)
    {
        Category::destroy($request->get('id'));
        return redirect()->route('category.index');
    }

    public function edit(int $id): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory 
    {
        $result = Category::find($id);
        return view('category.edit', compact('result'))->with(['title' => 'Category Update']);
    }

    public function update(Request $request)
    {
        Category::find($request->get('id'))->update(['name' => $request->get('name')]);
        return redirect()->route('category.index');
    }
}
