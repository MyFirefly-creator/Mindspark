<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Ban;
use App\Models\User;
use App\Models\Warning;
use Illuminate\Http\Request;

class BanController extends Controller
{
    public function index()
    {
        $users = User::all();
        $ban = Ban::where('UserID', auth()->id())->latest()->first();
        $warnings = Warning::all();
        $pelanggaranOptions = Warning::select('pelanggaran')->distinct()->pluck('pelanggaran');

        return view('ban.index', compact('ban', 'users', 'warnings', 'pelanggaranOptions'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'Deskripsi' => 'required|string|max:255',
            'duration' => 'required|numeric',
            'unit' => 'required|in:minutes,hours,days',
            'UserID' => 'required|exists:users,id',
        ]);

        $banUntil = match ($request->unit) {
            'minutes' => Carbon::now('Asia/Jakarta')->addMinutes($request->duration),
            'hours' => Carbon::now('Asia/Jakarta')->addHours($request->duration),
            'days' => Carbon::now('Asia/Jakarta')->addDays($request->duration),
        };

        $ban = Ban::create([
            'Deskripsi' => $request->Deskripsi,
            'Ban_Until' => $banUntil,
            'UserID' => $request->UserID,
        ]);

        return redirect()->back()->with('success', 'User Berhasil di banned.');
    }
}
