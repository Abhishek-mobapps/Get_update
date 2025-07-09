<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth:admin');
    }

    // public function index()
    // {   
    //     // if (Auth::guard('admin')->attempt($credentials, $request->filled('remember'))) {
    //     //     $request->session()->regenerate();
    //     //     return redirect()->intended(route('admin.dashboard'));
    //     // }

    //     return view('admin.auth.dashboard');
    // }
    public function index(Request $request)
   {
    $showWelcomeBox = session()->pull('just_logged_in', true);
    return view('admin.auth.pages.dashboard.index', compact('showWelcomeBox'));
   }
    


    public function showBox()
    {
    session()->put('show_dashboard_box', true);
    return redirect()->route('admin.dashboard');
    }

}
