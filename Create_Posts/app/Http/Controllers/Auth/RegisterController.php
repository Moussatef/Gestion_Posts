<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function __construct(){
        $this->middleware(['guest']);
    }
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $fields = $request->validate([
            'name' => 'required|max:255|string',
            'email' => 'required|max:90|string|email',
            'password' => 'required|confirmed|max:255|min:6|string|',
        ]);
        User::create([
            'name' => $fields['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password'])
        ]);

        auth()->attempt($request->only('email', 'password'));

        return redirect()->route('profile');
    }
}
