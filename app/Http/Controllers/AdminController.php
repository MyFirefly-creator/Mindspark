<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Buku;
use App\Models\Peminjaman;

class AdminController extends Controller
{
    public function index()
    {
        if (Auth::user()->role !== 'admin') {
            return redirect()->route('index')->with('error', 'Anda tidak memiliki akses ke halaman ini.');
        }

        $jumlahUser = User::count();

        $jumlahBukuDipinjam = Peminjaman::whereMonth('created_at', now()->month)->count();

        $jumlahBukuBaru = Buku::whereMonth('created_at', now()->month)->count();

        return view('admin.index', compact('jumlahUser', 'jumlahBukuDipinjam', 'jumlahBukuBaru'));
    }
}
