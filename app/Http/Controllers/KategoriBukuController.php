<?php

namespace App\Http\Controllers;

use App\Models\KategoriBuku as KategoriBukuModel;
use Illuminate\Http\Request;

class KategoriBukuController extends Controller
{
    public function index()
    {
        $kategoriBuku = KategoriBukuModel::all();
        return view('kategori_buku.index', compact('kategoriBuku'));
    }

    public function create()
    {
        return view('kategori_buku.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'BukuID' => 'required|exists:bukus,id',
            'KategoriID' => 'required|exists:kategoris,id',
        ]);

        KategoriBukuModel::create([
            'BukuID' => $request->BukuID,
            'KategoriID' => $request->KategoriID,
        ]);

        return redirect()->route('kategori_buku.index')->with('success', 'Kategori Buku berhasil ditambahkan!');
    }

    public function edit(KategoriBukuModel $kategoriBuku)
    {
        return view('kategori_buku.edit', compact('kategoriBuku'));
    }

    public function update(Request $request, KategoriBukuModel $kategoriBuku)
    {
        $request->validate([
            'BukuID' => 'required|exists:bukus,id',
            'KategoriID' => 'required|exists:kategoris,id',
        ]);

        $kategoriBuku->update($request->only(['BukuID', 'KategoriID']));

        return redirect()->route('kategori_buku.index')->with('success', 'Kategori Buku berhasil diperbarui!');
    }

    public function destroy(KategoriBukuModel $kategoriBuku)
    {
        $kategoriBuku->delete();
        return redirect()->route('kategori_buku.index')->with('success', 'Kategori Buku berhasil dihapus!');
    }
}
