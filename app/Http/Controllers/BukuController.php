<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Peminjaman;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class BukuController extends Controller
{
    public function index()
    {
        $dataBuku = Buku::orderBy('id', 'asc')->paginate(10);
        return view('buku.index', compact('dataBuku'));
    }

    public function create()
    {
        if (!$this->isAdminOrSuperadmin()) {
            return redirect()->route('buku.index')->with('error', 'Anda tidak memiliki akses untuk menambah buku.');
        }

        return view('buku.create');
    }

    public function store(Request $request)
    {
        if (!$this->isAdminOrSuperadmin()) {
            return redirect()->route('buku.index')->with('error', 'Anda tidak memiliki akses untuk menambah buku.');
        }

        $request->validate([
            'NamaBuku' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'penerbit' => 'required|max:255|string',
            'penulis' => 'required|max:255|string',
            'tanggal_terbit' => 'required|date',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $image_file = $request->file('image');
        $image_nama = date('ymdhis') . '.' . $image_file->extension();
        $image_file->move(public_path('buku'), $image_nama);

        $tanggal_terbit = Carbon::createFromFormat('Y-m-d', $request->tanggal_terbit, 'Asia/Jakarta');

        Buku::create([
            'NamaBuku' => $request->NamaBuku,
            'deskripsi' => $request->deskripsi,
            'penerbit' => $request->penerbit,
            'penulis' => $request->penulis,
            'tanggal_terbit' => $tanggal_terbit,
            'image' => 'buku/' . $image_nama
        ]);

        return redirect()->route('buku.index')->with('success', 'Buku berhasil ditambahkan.');
    }

    public function show($id)
    {
    $buku = Buku::find($id);

    if (!$buku) {
        return redirect()->route('buku.index')->with('error', 'Buku tidak ditemukan.');
    }

    $peminjamanTerakhir = Peminjaman::where('buku_id', $id)->latest()->first();
    $sedangDipinjam = $peminjamanTerakhir && $peminjamanTerakhir->status === 'dipinjam';

    $bukuLainnya = Buku::where('id', '!=', $id)->inRandomOrder()->limit(4)->get();

    return view('buku.show', compact('buku', 'sedangDipinjam', 'peminjamanTerakhir', 'bukuLainnya'));
    }


    public function edit($id)
    {
        if (!$this->isAdminOrSuperadmin()) {
            return redirect()->route('buku.index')->with('error', 'Anda tidak memiliki akses untuk mengedit buku ini.');
        }

        $buku = Buku::findOrFail($id);
        return view('buku.edit', compact('buku'));
    }

    public function update(Request $request, $id)
    {
        if (!$this->isAdminOrSuperadmin()) {
            return redirect()->route('buku.index')->with('error', 'Anda tidak memiliki akses untuk mengedit buku ini.');
        }

        $buku = Buku::findOrFail($id);

        $request->validate([
            'NamaBuku' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'penerbit' => 'required|max:255|string',
            'penulis' => 'required|max:255|string',
            'tanggal_terbit' => 'required|date',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        if ($request->hasFile('image')) {
            $image_file = $request->file('image');
            $image_nama = date('ymdhis') . '.' . $image_file->extension();
            $image_file->move(public_path('buku'), $image_nama);
            $buku->image = 'buku/' . $image_nama;
        }

        $tanggal_terbit = Carbon::createFromFormat('Y-m-d', $request->tanggal_terbit, 'Asia/Jakarta');

        $buku->update([
            'NamaBuku' => $request->NamaBuku,
            'deskripsi' => $request->deskripsi,
            'penerbit' => $request->penerbit,
            'penulis' => $request->penulis,
            'tanggal_terbit' => $tanggal_terbit
        ]);

        return redirect()->route('buku.index')->with('success', 'Buku berhasil diperbarui.');
    }

    public function destroy($id)
    {
        if (!$this->isAdminOrSuperadmin()) {
            return redirect()->route('buku.index')->with('error', 'Anda tidak memiliki akses untuk menghapus buku ini.');
        }

        $buku = Buku::findOrFail($id);
        $buku->delete();

        return redirect()->route('buku.index')->with('success', 'Buku berhasil dihapus.');
    }

    private function isAdminOrSuperadmin()
    {
        return Auth::check() && in_array(Auth::user()->role, ['admin', 'superadmin']);
    }
}
