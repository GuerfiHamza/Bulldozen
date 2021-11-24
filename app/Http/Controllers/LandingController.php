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
        $fournisseurs = \App\Models\Fournisseur::all();
        $fournisseurs2 = \App\Models\Fournisseur2::all();
        // dd($products);
        return view('welcome')->with([
        'categories' => $categories,
        'products' => $products,
        'partenaires' => $partenaires,
        'fournisseurs' => $fournisseurs,
        'fournisseurs2' => $fournisseurs2
        ]);
    }
}
