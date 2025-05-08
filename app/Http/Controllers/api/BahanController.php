<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Bahan;
use Illuminate\Http\Request;

class BahanController extends Controller
{
    public function getFiveNewest()
    {
        $bahan = Bahan::orderBy('created_at', 'desc')->limit(5)->get();

        return response()->json([
            'success' => true,
            'message' => 'Produk berhasil disimpan',
            'data' => $bahan
        ], 200);
    }
    public function getAllBahan()
    {
        $bahan = Bahan::orderBy('created_at', 'desc')->get();

        return response()->json([
            'success' => true,
            'message' => 'Produk berhasil disimpan',
            'data' => $bahan
        ], 200);
    }

    public function updateBahan(Request $request, $id)
    {
        $bahan = Bahan::findOrFail($id);

        $bahan->name = $request->name;
        $bahan->satuan = $request->satuan;
        $bahan->tipe = $request->tipe;
        $bahan->harga = $request->harga;
        $bahan->save();

        return response()->json([
            'success' => true,
            'message' => 'Produk berhasil disimpan',
            'data' => $bahan
        ], 200);
    }

    public function showBahan($id)
    {
        $bahan = Bahan::where('id', $id)->get();
        return response()->json([
            'success' => true,
            'message' => 'Produk berhasil disimpan',
            'data' => $bahan
        ], 200);
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

    public function deleteBahan($id)
    {
        $product = Bahan::findOrFail($id);
        $product->delete();
        return response()->json(['message' => 'Bahan berhasil dihapus']);
    }
}
