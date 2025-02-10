<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        return view('sesi.index');
    }

    public function loginForm()
    {
        return view('sesi.login');
    }

    public function login(Request $request)
    {
        $validated = $request->validate([
            'nis' => 'required',
            'password' => 'required|min:6'
        ]);

        if (Auth::attempt(['nis' => $validated['nis'], 'password' => $validated['password']])) {
            return redirect()->route('dashboard.index')->with('success', 'Selamat Datang!');
        }

        return redirect()->route('login')->withErrors(['nis' => 'NIS atau password salah.']);
    }

    public function registerForm()
    {
        return view('sesi.register');
    }

    public function register(Request $request)
    {
        $validated = $request->validate([
            'nis' => 'nullable|numeric|unique:users',
            'nama' => 'required|string|max:255',
            'email' => 'required|unique:users,email|string|max:255',
            'alamat' => 'required|string|max:255',
            'password' => 'required|min:6|confirmed',
        ]);

        User::create([
            'nis' => $validated['nis'],
            'password' => Hash::make($validated['password']),
            'nama' => $validated['nama'],
            'alamat' => $validated['alamat'],
            'email' => $validated['email'],
            'role' => 'user',
            'avatar' => 'profil/avatar.png',
        ]);

        return redirect()->route('index')->with('success', 'Berhasil Registrasi.');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('login')->with('success', 'Anda telah logout.');
    }

    public function dashboard()
    {
        $dataBuku = Buku::orderBy('created_at', 'desc')->take(8)->get();
        return view('dashboard.index', compact('dataBuku'));
    }
}
