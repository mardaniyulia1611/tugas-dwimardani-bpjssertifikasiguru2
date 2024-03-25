<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserProfileController extends Controller
{
    public function profile()
    {
        return view('profile');
    }

    public function update_profile(Request $request)
    {
        $user = Auth::user();
        $user->email = $request->email;
        $user->name = $request->name;
        // Update field lain sesuai dengan form
        $user->save();

        return redirect()->back()->with('success', 'Profil berhasil diperbarui.');
    }
}
