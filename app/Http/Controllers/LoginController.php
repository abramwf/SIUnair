<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index() {
        return view('admin/adminLogin');
    }

    public function login(Request $request) {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $data = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::attempt($data)) {
            return redirect()->route('adminHome');  
        } else {
            return redirect()->route('adminLogin')->with('failed', 'Email atau Password Salah');
        }
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('adminLogin')->with('success', 'Kamu berhasil logout');
    }
}