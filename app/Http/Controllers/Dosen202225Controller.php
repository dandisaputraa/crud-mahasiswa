<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen202225Model;

class Dosen202225Controller extends Controller
{
    public function view_202225_dosen(){
        $hasil = Dosen202225Model::All();
        return view ('dosen_202225',['data_dosen' => $hasil]);
    }
}
