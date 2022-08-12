<?php

namespace App\Http\Controllers\Color;

use App\Http\Controllers\Controller;
use App\Http\Requests\Color\StoreRequest;
use App\Http\Requests\Color\UpdateRequest;
use App\Models\Category;
use App\Models\Color;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    public function index()
    {
        $colors = Color::orderByDesc('id')->get();

        return view('color.index', compact('colors'));
    }

    public function create()
    {
        return view('color.create');
    }

    public function store(StoreRequest $request, Color $color)
    {
        $data = $request->validated();
        $color->create($data);

        return redirect()->route('color.index');
    }

    public function show(Color $color)
    {
        return view('color.show', compact('color'));
    }

    public function edit(Color $color)
    {
        return view('color.edit', compact('color'));
    }

    public function update(UpdateRequest $request, Color $color)
    {
        $data = $request->validated();
        $color->update($data);

        return view('color.show', compact('color'));
    }

    public function delete(Color $color)
    {
        $color->delete();

        return redirect()->route('color.index');
    }
}
