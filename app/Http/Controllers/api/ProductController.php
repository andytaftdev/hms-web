<?php

namespace App\Http\Controllers\api;

use App\Models\Bahan;
use App\Models\Composition;
use App\Models\Kemasan;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $kemasanPrimer = Kemasan::where('tipe', 'primer')->get();
        $kemasanInnerbox = Kemasan::where('tipe', 'innerbox')->get();
        $kemasanOuterbox = Kemasan::where('tipe', 'outerbox')->get();
        $kemasanMasterbox = Kemasan::where('tipe', 'masterbox')->get();
        $bahan = Bahan::all();


        return response()->json([
            'primer' => $kemasanPrimer,
            'innerbox' => $kemasanInnerbox,
            'outerbox' => $kemasanOuterbox,
            'masterbox' => $kemasanMasterbox,
            'bahan' => $bahan
        ], 200);
    }
    public function GetAllProduct()
    {
        $allProduct = Product::all();


        return response()->json([
            'products' => $allProduct
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function dashboardSend(Request $request)
    {

        $validated = $request->validate([
            'brand' => 'required|string',
            'name' => 'required|string',
            'type' => 'required|string',
            'primer' => 'required|string',
            'innerbox' => 'required|string',
            'outerbox' => 'required|string',
            'masterbox' => 'required|string',
            'harga_produksi' => 'required|string',
            'harga_jual' => 'required|string',
            'satuan' => 'required|string', // Komposisi harus dalam bentuk array
        ]);

        $validated['primer'] =Kemasan::where('name', $validated['primer'])->first()->id;
        $validated['innerbox'] =Kemasan::where('name', $validated['innerbox'])->first()->id;
        $validated['outerbox'] =Kemasan::where('name', $validated['outerbox'])->first()->id;
        $validated['masterbox'] =Kemasan::where('name', $validated['masterbox'])->first()->id;



        // Simpan ke database
        $produk = Product::create($validated);

        // Simpan Komposisi
        foreach ($request->komposisi as $item) {
            Composition::create([
                'product_id' => $produk->id, // ID produk baru
                'bahan_id' => Bahan::where('name', $item['bahan'])->first()->id, // ID bahan yang dipilih
                'percent' => $item['percent'], // Persentase bahan
            ]);
        }


        return response()->json([
            'success' => true,
            'message' => 'Produk berhasil disimpan',
            'data' => $produk
        ], 201);
    }
    public function sendBahan(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required|string',
            'satuan' => 'required|string',
            'tipe' => 'required|string',
            'harga' => 'required|int',

        ]);




        // Simpan ke database
        $bahan = Bahan::create($validated);



        return response()->json([
            'success' => true,
            'message' => 'Produk berhasil disimpan',
            'data' => $bahan
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
