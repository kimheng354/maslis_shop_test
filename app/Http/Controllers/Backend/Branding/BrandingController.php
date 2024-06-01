<?php

namespace App\Http\Controllers\Backend\Branding;

use App\Http\Controllers\Controller;
use App\Models\Branding;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BrandingController extends Controller
{
    public function index()
    {   $user = Auth::user();
        $branding = Branding::orderBy('branding_id', 'asc')->get();
        return view('backend.branding.showbranding', compact('branding','user'));
    }
    public function create()
    {   
        $user = Auth::user();
        return view('backend.branding.addbranding', compact('user'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $branding = new Branding();
        $branding->name = $request->name;
        $branding->save();

        return redirect(route('admin.branding.show'))->with('success', 'Branding created successfully.');
    }
    public function edit($id)
    {   
        $user = Auth::user();
        $branding = Branding::findOrFail($id);
        return view('backend.branding.editbrading', compact('branding','user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $branding = Branding::findOrFail($id);
        $branding->name = $request->name;   
        $branding->save();

        return redirect()->route('admin.branding.show')->with('success', 'Branding updated successfully.');
    }
    public function destroy($id)
    {
        $branding = Branding::findOrFail($id);
        $branding->delete();

        return redirect()->route('admin.branding.show')->with('success', 'Branding deleted successfully.');
    }
}
