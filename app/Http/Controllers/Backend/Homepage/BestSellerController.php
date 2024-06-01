<?php

namespace App\Http\Controllers\Backend\Homepage;

use App\Http\Controllers\Controller;
use App\Models\Branding;
use App\Models\Category;
use App\Models\Color;
use App\Models\Size;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Whoops\Run;

class BestSellerController extends Controller
{
    
    public function show(){
        $user = Auth::user();
        $categories = Category::orderBy('category_id', 'asc')->get();
        $branding = Branding::orderBy('branding_id', 'asc')->get();
        $sizes = Size::orderBy('size_id', 'asc')->get();
        $colors = Color::orderBy('color_id', 'asc')->get();
    
        return view('backend.homemanagement.bestseller.index', compact('user', 'categories', 'branding', 'sizes', 'colors'));
    }
}
