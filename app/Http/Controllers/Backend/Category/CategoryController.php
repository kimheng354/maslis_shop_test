<?php

namespace App\Http\Controllers\Backend\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{

    public function index()
    {   $user = Auth::user();
        $categories = Category::orderBy('category_id', 'asc')->get();
        return view('backend.category.showcategory', compact('categories','user'));
    }
    public function create()
    {   
        $user = Auth::user();
        return view('backend.category.addcategory', compact('user'));
    }
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $category = new Category();
        $category->name = $request->name;
        $category->save();

        return redirect(route('admin.category.show'))->with('success', 'Category created successfully.');
    }
    public function edit($id)
    {   
        $user = Auth::user();
        $category = Category::findOrFail($id);
        return view('backend.category.editcategory', compact('category','user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $category = Category::findOrFail($id);
        $category->name = $request->name;
        $category->save();

        return redirect()->route('admin.category.show')->with('success', 'Category updated successfully.');
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->route('admin.category.show')->with('success', 'Category deleted successfully.');
    }
}
