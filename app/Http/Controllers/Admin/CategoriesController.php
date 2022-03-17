<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoriesController extends Controller
{

    public function index(Request $request)
    {
        $categories = Category::when($request->name, function ($query, $value) {

            $query->where(function ($query) use ($value) {
                $query->where('name', 'LIKE', "%{$value}%")
                    ->orWhere('description', 'LIKE', "%{$value}%");
            });
        })
            ->when($request->parent_id, function ($query, $value) {
                $query->where('parent_id', '=', $value);
            })->get();

        $parents = Category::orderBy('name', 'asc')->get();
        return view('admin.categories.index', [
            'categories' => $categories,
            'parents' => $parents,
        ]);
    }


    public function create()
    {
        $parents = Category::all();
        return view('admin.categories.create', [
            'parents' => $parents,
            'category' => new Category(),
        ]);
    }

    public function store(Request $request)
    {
        $request->merge([
            'slug' => Str::slug($request->input('name'))
        ]);
        Category::create($request->all());

        return redirect(route('admin.categories.index'))
            ->with('success', 'Category Created!');
    }


    public function edit($id)
    {
        $category = Category::findOrFail($id);
        $parents = Category::orderBy('name', 'asc')->get();

        return view('admin.categories.edit', [
            'id' => $id,
            'parents' => $parents,
            'category' => $category,
        ]);
    }
    public function update(Request $request, $id)
    {
        $categories = Category::findOrFail($id);

        $categories->update($request->all());

        return redirect( route('admin.categories.index'))
            ->with('success', 'Category Updated!');
    }

    public function destroy($id)
    {
        $categories = Category::findOrFail($id);
        $categories->delete();

        return redirect( route('admin.categories.index'))
            ->with('delete', 'Category Deleted!');
    }
}
