<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HitungController extends Controller
{
    public function tambah(){
        $bilangan1=5;
        $bilangan2=7;
        $hasil= $bilangan1 + $bilangan2;
        return view('berhitung', ['hitung'=> $hasil, 'bilangan1'=> $bilangan1, 'bilangan2'=> $bilangan2]);
    }
    public function kali(){
        $bilangan1=5;
        $bilangan2=7;
        $hasil= $bilangan1 * $bilangan2;
        return view('berhitung', ['hitung'=> $hasil, 'bilangan1'=> $bilangan1, 'bilangan2'=> $bilangan2]);
    }
    
}
