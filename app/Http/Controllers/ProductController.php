<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexAPI()
    {
        $products = Product::all();
        return response()->json($products);
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
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function storeAPI(Request $request)
    {
        $products = new Product;
        $products -> nama = $request->input('nama');
        $products -> jenis = $request->input('jenis');
        $products -> kategori = $request->input('kategori');
        $products -> jumlah = $request->input('jumlah');
        $products -> status = $request->input('status');
        $products -> gambar = $request->input('gambar');
        $products -> deskripsi = $request->input('deskripsi');
        $products -> save();
        return response()->json($products);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function updateAPI(Request $request, $id)
    {
        $products = Product::where(['id'=>$id])->first();
        $products -> nama = $request->input('nama');
        $products -> jenis = $request->input('jenis');
        $products -> kategori = $request->input('kategori');
        $products -> jumlah = $request->input('jumlah');
        $products -> status = $request->input('status');
        $products -> gambar = $request->input('gambar');
        $products -> deskripsi = $request->input('deskripsi');
        $products -> save();
        return response()->json($products);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroyAPI(Request $request, $id)
    {
        $products = Product::where(['id'=>$id])->first();
        $products->delete();
        return response()->json($products); 
    }
}
