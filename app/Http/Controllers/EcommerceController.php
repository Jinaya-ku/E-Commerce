<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class EcommerceController extends Controller
{
    // Menampilkan daftar semua produk
    public function index()
    {
        $produks = Produk::all();
        return view('ecommerce.index', compact('produks'));
    }

    // Menampilkan formulir untuk membuat produk baru
    public function create()
    {
        return view('ecommerce.create');
    }

    // Menyimpan produk baru ke dalam penyimpanan
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'harga' => 'required|numeric',
            'stok' => 'required|integer',

        ]);

        Produk::create($request->all());

        return redirect()->route('ecommerce.index')
                         ->with('success', 'Produk berhasil dibuat.');
    }

    // Menampilkan produk tertentu
    public function show($id)
    {
        $produk = Produk::findOrFail($id);
        return view('ecommerce.show', compact('produk'));
    }

    // Menampilkan formulir untuk mengedit produk yang sudah ada
    public function edit($id)
    {
        $produk = Produk::findOrFail($id);
        return view('ecommerce.edit', compact('produk'));
    }

    // Memperbarui produk yang sudah ada di penyimpanan
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'harga' => 'required|numeric',
            'stok' => 'required|integer',
            'kategori' => 'required',
            'gambar' => 'required|image|mimes:jpeg,jpg,png',
        ]);

        $produk = Produk::findOrFail($id);
        $produk->update($request->all());

        return redirect()->route('ecommerce.index')
                         ->with('success', 'Produk berhasil diperbarui.');
    }

    // Menghapus produk dari penyimpanan
    public function destroy($id)
    {
        $produk = Produk::findOrFail($id);
        $produk->delete();

        return redirect()->route('ecommerce.index')
                         ->with('success', 'Produk berhasil dihapus.');
    }
}
