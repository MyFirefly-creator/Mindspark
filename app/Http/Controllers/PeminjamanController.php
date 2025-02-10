<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use App\Models\Buku;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $peminjaman = Peminjaman::all();
        return view('peminjaman.index', compact('peminjaman'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $bukuID = $request->query('buku_id'); // Ambil BukuID dari URL
        $buku = Buku::find($bukuID); // Ambil data buku berdasarkan ID

        if (!$buku) {
            return redirect()->route('peminjaman.index')->with('error', 'Buku tidak ditemukan!');
        }

        return view('peminjaman.create', compact('buku'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'UserID' => 'required|exists:users,id',
            'BukuID' => 'required|exists:bukus,id',
            'TanggalPeminjaman' => 'required|date',
            'TanggalPengembalian' => 'required|date|after:TanggalPeminjaman',
            'StatusPeminjaman' => 'required|string',
        ]);

        Peminjaman::create([
            'UserID' => auth()->id(),
            'BukuID' => $request->BukuID,
            'TanggalPeminjaman' => now()->format('Y-m-d'),
            'TanggalPengembalian' => $request->TanggalPengembalian,
            'StatusPeminjaman' => 'dipinjam',
        ]);

        return redirect()->route('peminjaman.index')->with('success', 'Peminjaman berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Peminjaman $peminjaman)
    {
        return view('peminjaman.show', compact('peminjaman'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Peminjaman $peminjaman)
    {
        return view('peminjaman.edit', compact('peminjaman'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Peminjaman $peminjaman)
    {
        $request->validate([
            'StatusPeminjaman' => 'required|string',
        ]);

        $peminjaman->update([
            'StatusPeminjaman' => $request->StatusPeminjaman,
        ]);

        return redirect()->route('peminjaman.index')->with('success', 'Status peminjaman berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Peminjaman $peminjaman)
    {
        $peminjaman->delete();
        return redirect()->route('peminjaman.index')->with('success', 'Peminjaman berhasil dihapus!');
    }
}
