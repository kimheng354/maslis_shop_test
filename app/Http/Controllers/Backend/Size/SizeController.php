<?php

namespace App\Http\Controllers\Backend\Size;

use App\Http\Controllers\Controller;
use App\Models\Size;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SizeController extends Controller
{

    public function index()
    {
        $user = Auth::user();
        $sizes = Size::orderBy('size_id', 'asc')->get();
        return view('backend.size.showsize', compact('sizes', 'user'));
    }
    public function create()
    {
        $user = Auth::user();
        return view('backend.size.addsize', compact('user'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $size = new Size();
        $size->name = $request->name;
        $size->save();

        return redirect(route('admin.size.show'))->with('success', 'Size created successfully.');
    }
    public function edit($id)
    {
        $user = Auth::user();
        $size = Size::findOrFail($id);
        return view('backend.size.editsize', compact('size', 'user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $size = Size::findOrFail($id);
        $size->name = $request->name;
        $size->save();

        return redirect()->route('admin.size.show')->with('success', 'Size updated successfully.');
    }
    public function destroy($id)
    {
        $size = Size::findOrFail($id);
        $size->delete();

        return redirect()->route('admin.size.show')->with('success', 'Size deleted successfully.');
    }
}
