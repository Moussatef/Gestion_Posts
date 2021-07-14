<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);
    }
    public function index()
    {
        return view('auth.login');
    }
    public function store(request $request)
    {
        // $fields = $request->validate([
        //     'email' => 'required|max:90|string|email',
        //     'password' => 'required|confirmed|max:255|min:6|string',
        // ]);
        $this->validate($request, [
            'email' => 'required|max:90|string|email',
            'password' => 'required|max:255|string',
        ]);
        if (!auth()->attempt($request->only('email', 'password'), $request->remember)) {
            return back()->with('status', 'Invalid login Email or password wrong!!');
        }
        return redirect()->route('profile');
    }

    public function admin(request $request)
    {
        // $fields = $request->validate([
        //     'email' => 'required|max:90|string|email',
        //     'password' => 'required|confirmed|max:255|min:6|string',
        // ]);
        $this->validate($request, [
            'email' => 'required|max:90|string|email',
            'password' => 'required|max:255|string',
        ]);
        $creds = $request->only('email', 'password');
        if (Auth::guard('admin')->attempt($creds)) {
            return redirect()->route('admin.dashboard');
            // dd(Auth::guard('admin'));

        } else {
            return back()->with('error', 'Incorrect information');
        }
        // $admin = Admin::where('email', $request['email'])->first();
        // // Check password
        // if (!$admin || strcmp($request['password'], $admin->password) !== 0) {
        //     return response([
        //         'message' => 'error in sign up'
        //     ], 401);
        // }
        // // return redirect()->route('admin.adminDash');
        // session('Admin', $admin->id);
        // return dd(session('Admin'));
    }
}
