<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukController extends Controller
{
    /**
     * READ - tampilkan semua produk
     */
    public function index()
    {
        $Produk = Produk::all();
        return view('welcome', compact('Produk'));
    }

    /**
     * CREATE - tambah produk
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required|numeric'
        ]);

        Produk::create([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'stok' => $request->stok
        ]);

        return redirect('/');
    }

    /**
     * EDIT - ambil data 1 produk
     */
    public function edit($id)
    {
        $produk = Produk::findOrFail($id);
        return view('edit', compact('produk'));
    }

    /**
     * UPDATE - simpan perubahan
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required|numeric'
        ]);

        $produk = Produk::findOrFail($id);

        $produk->update([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'stok' => $request->stok
        ]);

        return redirect('/');
    }

    /**
     * DELETE - hapus produk
     */
    public function destroy($id)
    {
        $produk = Produk::findOrFail($id);
        $produk->delete();

        return redirect('/');
    }
}