<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __construct(){
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

        if (!auth()->attempt($request->only('email', 'password'),$request->remember)) {
            return back()->with('status', 'Invalid login Email or password wrong!!');
        }

        return redirect()->route('profile');
    }
}
