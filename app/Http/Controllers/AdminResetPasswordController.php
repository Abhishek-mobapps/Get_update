<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Auth;


class AdminResetPasswordController extends Controller
{
    public function index(){
        return view('admin.auth.passwords.change-password');
        // ->with(
        //     ['token' => $token, 'email' => $request->email]
        // );
    }

    public function updatePassword(Request $request)
    {
    $request->validate([
        'old_password' => 'required',
        'new_password' => 'required|min:6|confirmed',
    ]);

    $admin = Auth::guard('admin')->user();

    if (!Hash::check($request->old_password, $admin->password)) {
        return back()->with('error', 'Current password is incorrect.');
    }

    $admin->update([
        'password' => Hash::make($request->new_password),
    ]);

    return redirect()->intended(route('admin.user-profiles'))->with('success', 'Password updated successfully.');
}

}
