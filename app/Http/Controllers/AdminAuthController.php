<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminAuthController extends Controller
{
    public function index(){
        $admin=Admin::get();
        return view(compact('admin'));
    }
    public function showRegisterForm()
    {
        return view('admin.auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name'           => 'required|string|max:255',
            'email'          => 'required|string|email|max:255|unique:admins',
            'contact_number' => 'nullable|string|max:20',
            'password'       => 'required|string|min:6|confirmed',
            'profile_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);
  
        $imagePath = null;

        if ($request->hasFile('profile_image')) {
        $imagePath = $request->file('profile_image')->store('admin-profiles', 'public');
        }

        Admin::create([
            'name'           => $request->name,
            'email'          => $request->email,
            'contact_number' => $request->contact_number,
            'password'       => Hash::make($request->password),
            'profile_image' => $imagePath,
        ]);

        return redirect()->route('admin.login')->with('success', 'Registration successful, please login.');
    }

    public function showLoginForm()
    {
        return view('admin.auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email'    => 'required|email',
            'password' => 'required|string',
        ]);

        if (Auth::guard('admin')->attempt($credentials, $request->filled('remember'))) {
            $request->session()->regenerate();
            session(['just_logged_in' => true]);
            return redirect()->intended(route('admin.dashboard'));
        }
        
             return back()->withErrors(['email' => 'Invalid credentials'])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
    }

    public function update(Request $request)
    {
    $request->validate([
        'name'           => 'required|string|max:255',
        'email'          => 'required|email|max:255',
        'contact_number' => 'required|string|max:20',
    ]);

    $admin = Auth::guard('admin')->user();


    $admin->update([
        'name'           => $request->name,
        'email'          => $request->email,
        'contact_number' => $request->contact_number,
    ]);
    Auth::guard('admin')->setUser($admin->fresh());
    return redirect()->back()->with('success', 'Profile updated successfully.');
}
}