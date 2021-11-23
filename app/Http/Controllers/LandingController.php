<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class LandingController extends Controller
{
    public function index()
    {

        $categories = Category::All()->take(6);
        $products = \App\Models\Product::where('featured', true)->take(6)->get();
        $partenaires = \App\Models\Partenaires::all();
        $banner = \App\Models\Banner::where('id', '1')->firstOrFail();
        $fournisseurs = \App\Models\Fournisseur::all();
        $fournisseurs2 = \App\Models\Fournisseur2::all();
        // dd($products);
        return view('welcome')->with([
        'categories' => $categories,
        'products' => $products,
        'partenaires' => $partenaires,
        'banner' => $banner,
        'fournisseurs' => $fournisseurs,
        'fournisseurs2' => $fournisseurs2
        ]);
    }
}
