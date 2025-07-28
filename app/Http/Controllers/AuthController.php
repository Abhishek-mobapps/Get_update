<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class AuthController extends Controller
{
    public function showRegisterForm() {
        return view('frontend.auth.register');
    }

    public function register(Request $request) {
        $request->validate([
            'name' => 'required',
            'phone_number' => 'required',
            'email' => 'required|email|unique:users',
            'company_name' => 'required',
            'company_address' => 'required',
            'password' => 'required|confirmed',
            'subscription_type' => 'required',
            'chamber_certificate' => 'nullable|file|mimes:pdf',
            'business_mandate' => 'nullable|file|mimes:pdf',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->phone_number = $request->phone_number;
        $user->email = $request->email;
        $user->company_name = $request->company_name;
        $user->company_address = $request->company_address;
        $user->subscription_type = $request->subscription_type;
        $user->password = Hash::make($request->password);

        // Upload PDFs
        if ($request->hasFile('chamber_certificate')) {
            $user->chamber_certificate = $request->file('chamber_certificate')->store('certificates', 'public');
        }

        if ($request->hasFile('business_mandate')) {
            $user->business_mandate = $request->file('business_mandate')->store('mandates', 'public');
        }

        $user->save();

        Auth::login($user);

        return redirect()->route('frontend.auth.dashboard'); // change as needed
    }

    public function showLoginForm() {
        return view('frontend.auth.login');
    }

    public function login(Request $request) {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials, $request->remember)) {
            return redirect()->route('frontend.auth.dashboard');
        }

        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('userlogin');
    }
}
