<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SesiController extends Controller
{
    function index(){
        return view('login');
    }

    function login(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ], [
            'email.required' => 'Email Wajib diisi',
            'password.required' => 'Password Wajib diisi',
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($infologin)) {
            if(Auth::user()->role == 'Akademik'){
                return redirect('Akademik/Akademik');
            } elseif(Auth::user()->role == 'Dekan'){
                return redirect('Akademik/Dekan');
            } elseif(Auth::user()->role == 'KetuaProgramStudi'){
                return redirect('Akademik/KetuaProgramStudi');
            } elseif(Auth::user()->role == 'PembimbingAkademik'){
                return redirect('Akademik/PembimbingAkademik');
            } elseif(Auth::user()->role == 'Mahasiswa'){
                return redirect('Akademik/Mahasiswa');
            }
        } else {
            return redirect()->back()->withErrors('username atau password yang dimasukkan tidak sesuai')->withInput();
        }
    }

    function logout(){
        Auth::logout();
        return redirect('');
    }
        
}
