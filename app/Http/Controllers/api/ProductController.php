<?php

namespace App\Http\Controllers\api;

use App\Models\Bahan;
use App\Models\Composition;
use App\Models\Kemasan;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $user = User::where('role', 'user')->get();



        return response()->json([
            'primer' => $kemasanPrimer,
            'innerbox' => $kemasanInnerbox,
            'outerbox' => $kemasanOuterbox,
            'masterbox' => $kemasanMasterbox,
            'bahan' => $bahan,
            'pt' => $user
        ], 200);
    }
    public function GetAllProduct(Request $request)
    {
        $allProduct = Product::all();




        return response()->json([
            'products' => $allProduct,
        ], 200);
    }
    public function showProduct($id)
    {
        $product = Product::where('id', $id)->get();
        $compositions = Composition::where('product_id', $id)->get();
        $komposisiList = [];

        foreach ($compositions as $item) {
       $bahan = Bahan::find($item['bahan_id']);
      if ($bahan) {
        $komposisiList[] = [
            'bahan' => $bahan->name,
            'percent' => $item['percent'],
        ];
       }
       }

        $productArray = $product[0];
        $productArray['primer'] = Kemasan::where('id', $productArray['primer'])->first()->name ?? 'kemasan telah dihapus' ;
        $productArray['innerbox'] = Kemasan::where('id', $productArray['innerbox'])->first()->name ?? 'kemasan telah dihapus';
        $productArray['outerbox'] = Kemasan::where('id', $productArray['outerbox'])->first()->name ?? 'kemasan telah dihapus';
        $productArray['masterbox'] = Kemasan::where('id', $productArray['masterbox'])->first()->name ?? 'kemasan telah dihapus';
        $productArray['pt'] = User::where('id', $productArray['pt'])->first()->username ?? 'user telah tidak ada';


        return response()->json([
            'products' => $product,
            'composition' => $komposisiList,
        ], 200);
    }

    public function deleteProduct($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return response()->json(['message' => 'Produk berhasil dihapus']);
    }

    public function updateProduct(Request $request, $id)
{
    $produk = Product::findOrFail($id);

    // Update data produk
    $produk->pt = User::where('username', $request->pt)->first()->id;
    $produk->name = $request->nama_produk;
    $produk->brand = $request->nama_brand;
    $produk->harga_jual = $request->harga_jual;
    $produk->harga_produksi = $request->harga_produksi;
    $produk->type = $request->type;
    $produk->primer = Kemasan::where('name', $request->primer)->first()->id;
    $produk->innerbox = Kemasan::where('name', $request->innerbox)->first()->id;
    $produk->outerbox = Kemasan::where('name', $request->outerbox)->first()->id;
    $produk->masterbox = Kemasan::where('name', $request->masterbox)->first()->id;
    $produk->satuan = $request->satuan;
    // ... (field lainnya)
    $produk->save();

    // Hapus komposisi lama
    $produk->compositions()->delete();

    // Simpan komposisi baru
    foreach ($request->komposisi as $item) {
        $produk->compositions()->create([
            'bahan_id' => Bahan::where('name', $item['nama'])->first()->id,
            'percent' => $item['persentase'],
        ]);
    }

    return response()->json(['message' => 'Produk berhasil diupdate']);
}
public function updateStatus(Request $request, $id)
{
    $produk = Product::findOrFail($id);

    // Update data produk

    $produk->status = $request->status;
    // ... (field lainnya)
    $produk->save();

    // Hapus komposisi lama


    return response()->json(['message' => 'Produk berhasil diupdate']);
}


    /**
     * Store a newly created resource in storage.
     */
    public function dashboardSend(Request $request)
    {

        $validated = $request->validate([
            'brand' => 'required|string',
            'name' => 'required|string',
            'pt' => 'required|string',
            'harga_jual' => 'required|string',
            'harga_produksi' => 'required|string',
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
        $validated['pt'] = User::where('username', $validated['pt'])->first()->id;



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
