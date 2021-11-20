<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class LandingController extends Controller
{
    public function index()
    {

        $categories = Category::All();
        $products = \App\Models\Product::where('featured', true)->get();
        $partenaires = \App\Models\Partenaires::all();
        $banner = \App\Models\Banner::where('id', '1')->firstOrFail();
        // dd($products);
        return view('welcome')->with([
        'categories' => $categories,
        'products' => $products,
        'partenaires' => $partenaires,
        'banner' => $banner
        ]);
    }
}
