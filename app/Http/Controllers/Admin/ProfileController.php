<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth:admin');
    }

    public function index()
    {   
        // if (Auth::guard('admin')->attempt($credentials, $request->filled('remember'))) {
        //     $request->session()->regenerate();
        //     return redirect()->intended(route('admin.dashboard'));
        // }

        return view('admin.auth.main-components.user-profile');
    }


    public function uploadImage(Request $request)
{
    $request->validate([
        'profile_image' => 'required|image|max:2048', // max 2MB
    ]);

    $admin = Auth::guard('admin')->user();

    if ($request->hasFile('profile_image')) {
        // Delete old image if exists
        if ($admin->profile_image && Storage::exists($admin->profile_image)) {
            Storage::delete($admin->profile_image);
        }

        // Store new image
        $path = $request->file('profile_image')->store('admin/profile', 'public');

        $admin->profile_image = $path;
        $admin->save();
    }

    return back()->with('success', 'Profile image updated successfully.');

}}
