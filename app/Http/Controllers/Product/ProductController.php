<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\StoreRequest;
use App\Http\Requests\Product\UpdateRequest;
use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use App\Models\ProductColor;
use App\Models\ProductTag;
use App\Models\Tag;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index(Category $category)
    {
        $products = Product::orderByDesc('id')->get();

        return view('product.index', compact('products'));
    }

    public function create()
    {
        $tags = Tag::all();
        $colors = Color::all();
        $categories = Category::all();
        return view('product.create', compact('tags', 'colors', 'categories'));
    }

    public function store(StoreRequest $request, Product $product)
    {
        $data = $request->validated();
        ($data['preview_image'] ? $data['preview_image'] = Storage::disk('public')->put('/images', $data['preview_image']) : '');

        $tagIds = $data['tags'];
        $colorIds = $data['colors'];
        unset($data['tags'], $data['colors']);

        $product = Product::firstOrCreate([
            'title' => $data['title']
        ],$data);

        foreach ($tagIds as $tagId){
            ProductTag::firstOrCreate([
                'product_id' => $product->id,
                'tag_id' => $tagId
            ]);
        }

        foreach ($colorIds as $colorId){
            ProductColor::firstOrCreate([
                'product_id' => $product->id,
                'color_id' => $colorId
            ]);
        }

        return redirect()->route('product.show', compact('product'));
    }

    public function show(Product $product)
    {
        return view('product.show',compact('product'));
    }

    public function edit(Product $product)
    {
        $colors = Color::all();
        $categories = Category::all();
        $tags = Tag::all();
        return view('product.edit',compact('product','colors', 'tags', 'categories'));
    }

    public function update(UpdateRequest $request, Product $product,Category $category, ProductTag $tag, ProductColor $color)
    {
        $data = $request->validated();
        $colorIds = $data['colors'];
        $tagIds = $data['tags'];

        $product->updateOrCreate([
            'title' => $data['title']
        ],$data);

        foreach ($colorIds as $colorId){
            $color->update([
                'product_id' => $product->id,
                'color_id' => $colorId,
            ]);
        }

        foreach ($tagIds as $tagId){
            $tag->update([
                'product_id' => $product->id,
                'tag_id' => $tagId,
            ]);
        }

        return redirect()->route('product.show', compact('product'));
    }

    public function delete(Product $product)
    {
        $product->delete();

        return redirect()->route('product.index');
    }
}
