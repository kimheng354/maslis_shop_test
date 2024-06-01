<?php

namespace App\Http\Controllers\Backend\Color;

use App\Http\Controllers\Controller;
use App\Models\Color;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ColorController extends Controller
{
    public function show()
    {   $user = Auth::user();
        $color = Color::orderBy('color_id', 'asc')->get();
        return view('backend.color.showcolor', compact('color','user'));
    }
    public function create()
    {   
        $user = Auth::user();
        return view('backend.color.addcolor', compact('user'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $color = new Color();
        $color->name = $request->name;
        $color->save();

        return redirect(route('admin.color.show'))->with('success', 'Color created successfully.');
    }
    public function edit($id)
    {   
        $user = Auth::user();
        $color = Color::findOrFail($id);
        return view('backend.color.editcolor', compact('color','user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $color = Color::findOrFail($id);
        $color->name = $request->name;   
        $color->save();

        return redirect()->route('admin.color.show')->with('success', 'Color updated successfully.');
    }
    public function destroy($id)
    {
        $color = Color::findOrFail($id);
        $color->delete();

        return redirect()->route('admin.color.show')->with('success', 'Color deleted successfully.');
    }
}
