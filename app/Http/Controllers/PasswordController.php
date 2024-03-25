<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PasswordController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function ubahPasswordForm()
    {
        return view('auth.ubah-password');
    }

    public function ubahPassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|string|min:8|confirmed',
        ]);

        $user = Auth::user();

        if (!Hash::check($request->current_password, $user->password)) {
            return back()->with('error', 'Password lama tidak cocok.');
        }
        try {
            $user->password = Hash::make($request->new_password);
            $user->save();

            return redirect()->route('admin.profile ')->with('success', 'Password berhasil diubah.');
        } catch (\Exception $e) {
            // Tangani kesalahan saat menyimpan
            return back()->with('error', 'Terjadi kesalahan saat menyimpan password baru.');
        }
    }

}
