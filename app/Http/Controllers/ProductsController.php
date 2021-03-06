<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductsRequest;
use App\Http\Requests\UpdateProductsRequest;
use App\Models\Category;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
    {
        $pagination = 12;

        $products = Product::where('active', true)->take($pagination);

        $products = $products->paginate($pagination);
        $fournisseurs = \App\Models\Fournisseur::all();
        $fournisseurs2 = \App\Models\Fournisseur2::all();
        $featured = Product::where('featured', 1);
        return view('products')->with([
            'products' => $products,
            'featured' => $featured,
            'fournisseurs' => $fournisseurs,
            'fournisseurs2' => $fournisseurs2
        ]);
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
     public function show($slug)
    {
        $id = Product::select('id')->get();
        $name = Product::select('name')->get();
        $product = Product::where('slug', $slug)->firstOrFail();
        // $mightAlsoLike = Product::where('name', '!=', $name)->mightAlsoLike()->get();

        // $stockLevel = getStockLevel($product->quantity);
        return view('product')->with([
            'product' => $product,
            // 'stockLevel' => $stockLevel,
            // 'mightAlsoLike' => $mightAlsoLike,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit(Products $products)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductsRequest  $request
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductsRequest $request, Products $products)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy(Products $products)
    {
        //
    }
}
