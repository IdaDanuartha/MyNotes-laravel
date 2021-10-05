<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index() {

        return view('register.index', [
            'title' => 'Register'
        ]);
    }

    public function register(Request $request) {

        $validatedData = $request->validate([
            // yang pertama dan kedua sama saja formatnya boleh pake | atau pake []
            'name' => 'required|max:50|unique:users',
            'username' => ['required', 'min:3', 'max:30', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:20'
        ]);

        // mengenkripsi password (mengacak password agar tidak diketahui oleh siapapun)
        $validatedData['password'] = bcrypt($validatedData['password']);
        
        User::create($validatedData);

        $request->session()->flash('success', 'Registrasi Berhasil! Login sekarang!');

        return redirect('/login');
    }
}
