<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\StoreRequest;
use App\Http\Requests\Category\UpdateRequest;
use App\Models\Category;
use function view;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::orderByDesc('created_at')->get();
        return view('category.index', compact( 'categories'));
    }

    public function create()
    {
        return view('category.create');
    }

    public function show(Category $category)
    {
        return view('category.show', compact('category'));
    }

    public function store(StoreRequest $request, Category $category)
    {
        $data = $request->validated();
        $category->create($data);

        return redirect()->route('category.index');
    }

    public function edit(Category $category)
    {
        return view('category.edit', compact('category'));
    }

    public function update(UpdateRequest $request, Category $category)
    {
        $data = $request->validated();
        $category -> update($data);

        return view('category.show', compact('category'));
    }

    public function delete(Category $category)
    {
        $category->delete();

        return redirect()->route('category.index');
    }
}
