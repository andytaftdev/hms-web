<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Kemasan;
use Illuminate\Http\Request;

class KemasanController extends Controller
{
    public function sendKemasan(Request $request)
{
    $request->validate([
        'name' => 'required|string',
        'bahan' => 'required|string',
        'tipe' => 'required|string',
        'harga' => 'required|numeric',
        'gambar' => 'required|image|mimes:jpeg,png,jpg|max:2048',
    ]);

    $path = $request->file('gambar')->store('kemasan', 'public');

    $kemasan = Kemasan::create([
        'name' => $request->name,
        'bahan' => $request->bahan,
        'tipe' => $request->tipe,
        'harga' => $request->harga,
        'gambar' => $path,
    ]);

    return response()->json(['success' => true, 'data' => $kemasan]);
}

public function showKemasan($id)
{
    $kemasan = Kemasan::where('id', $id)->get();
    return response()->json(['success' => true, 'data' => $kemasan]);
}

public function updateKemasan(Request $request, $id)
{
    $request->validate([
        'name' => 'required|string',
        'bahan' => 'required|string',
        'tipe' => 'required|string',
        'harga' => 'required|numeric',
        'gambar' => 'image|mimes:jpeg,png,jpg|max:2048',
    ]);

    $kemasan = Kemasan::findOrFail($id);

    $kemasan->name = $request->name;
    $kemasan->bahan = $request->bahan;
    $kemasan->tipe = $request->tipe;
    $kemasan->harga = $request->harga;

    if ($request->hasFile('gambar')) {
        $path = $request->file('gambar')->store('kemasan', 'public');
        $kemasan->gambar = $path;
    }

    $kemasan->save();

    return response()->json(['success' => true, 'data' => $kemasan]);
}

public function getAllKemasan()
{
    $kemasan = Kemasan::all();
    return response()->json(['success' => true, 'data' => $kemasan]);
}

public function deleteKemasan($id)
{
    $product = Kemasan::findOrFail($id);
    $product->delete();
    return response()->json(['message' => 'Kemasan berhasil dihapus']);
}
}
