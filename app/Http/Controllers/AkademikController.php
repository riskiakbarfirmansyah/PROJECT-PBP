<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AkademikController extends Controller
{
    function index(){
        return view('Akademik');
    }
    function Akademik(){
        return view('Akademik');
    }
    function Dekan(){
        return view('Akademik');
    }
    function PembimbingAkademik(){
        return view('Akademik');
    }
    function KetuaProgramStudi(){
        return view('Akademik');
    }
    function Mahasiswa(){
        return view('Akademik');
    }
}
