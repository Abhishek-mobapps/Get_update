<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function index()
    {
        return view('admin.auth.main-components.user-profile');
    }

    public function uploadImage(Request $request)
    {
        $request->validate([
            'profile_image' => 'required|image|max:2048', // max 2MB
        ]);

        $admin = Auth::guard('admin')->user();

        if ($request->hasFile('profile_image')) {
            // Delete old image if it exists
            if ($admin->profile_image && Storage::disk('public')->exists($admin->profile_image)) {
                Storage::disk('public')->delete($admin->profile_image);
            }

            // Store new image in public disk
            $path = $request->file('profile_image')->store('admin/profile', 'public');
            $admin->profile_image = $path;
            $admin->save();
        }

        return back()->with('success', 'Profile image updated successfully.');
    }
}
