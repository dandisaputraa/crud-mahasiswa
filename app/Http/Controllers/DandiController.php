<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DandiController extends Controller
{
    public function nim202225(){
        $a="dandi";
        $b=4;
        $c=5;
        $d="mawar";
        $e=10;
        $f=3;

        $hasil1= $b+$c;
        $hasil2= $e*$f;
        return view('dandi202225', ['nama'=> $a, 'nilai1'=> $b, 'nilai2'=> $c, 'nama2'=>$d, 'nilai3'=> $e, 
        'nilai4'=> $f, 'hasil1'=>$hasil1, 'hasil2'=>$hasil2]);
    }
}
