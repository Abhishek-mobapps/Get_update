<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use App\Models\Type;
use App\Models\OperationStatus;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class AuthController extends Controller
{

    public function dashboard(Request $request)
    {
        $user = Auth::user();
        if (!$user) {
            return redirect()->route('userlogin')->withErrors(['msg' => 'Please login first.']);
        }

        $products = Product::query()
            ->when($request->category_id, fn($q) => $q->where('category_id', $request->category_id))
            ->when($request->type_id, fn($q) => $q->where('type_id', $request->type_id))
            ->when($request->buy_sell, fn($q) => $q->where('buy_sell', $request->buy_sell))
            ->when($request->operation_status_id, fn($q) => $q->where('operation_status_id', $request->operation_status_id))
            ->whereHas('category', fn($q) => $q->where('status', 'active'))
            ->whereHas('type', fn($q) => $q->where('status', 'active'))
            ->whereHas('operationStatus', fn($q) => $q->where('status', 'active'))
            ->latest()
            ->paginate(9);

        if ($request->ajax()) {
            return view('frontend.auth.dashboard', compact('products'))->render();
        }
        return view('frontend.auth.dashboard', [
            'user'       => $user,
            'products'   => $products,
            'categories' => Category::where('status', 'active')->get(),
            'types'      => Type::where('status', 'active')->get(),
            'statuses'   => OperationStatus::where('status', 'active')->get(),
        ]);
    }

    public function showRegisterForm()
    {
        return view('frontend.auth.register');
    }

    public function reservedArea()
    {
        return view('frontend.auth.index');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone_number' => 'required',
            'email' => 'required|email|unique:users',
            'company_name' => 'required',
            'company_address' => 'required',
            // 'password' => 'null|confirmed',
            'subscription_type' => 'required|in:monthly,yearly',
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
        // $user->password = Hash::make($request->password);

        // Upload PDFs
        if ($request->hasFile('chamber_certificate')) {
            $user->chamber_certificate = $request->file('chamber_certificate')->store('certificates', 'public');
        }

        if ($request->hasFile('business_mandate')) {
            $user->business_mandate = $request->file('business_mandate')->store('mandates', 'public');
        }

        $user->save();

        Auth::login($user);

        return redirect()->route('userlogin')->with('success', 'You have registered successfully. Please login.');
    }

    public function showLoginForm()
    {
        return view('frontend.auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials, $request->remember)) {
            return redirect()->route('dashboard-page');
        }

        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('userlogin');
    }
}
