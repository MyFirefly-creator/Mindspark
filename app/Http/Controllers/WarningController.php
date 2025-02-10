<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Warning;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WarningController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'Pelanggaran' => 'required|string|max:255'
        ]);

        $warning = Warning::create([
            'UserID' => Auth::id(),
            'Pelanggaran' => $request->Pelanggaran
        ]);

        $user = User::find($warning->UserID);
        $user->increment('jumlah_pelanggaran');

        return redirect()->back()->with('success', 'Laporan berhasil dikirim.');
    }
}
