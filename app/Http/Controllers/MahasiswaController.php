<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MahasiswaModel;

class MahasiswaController extends Controller
{
    public function tampil_semua(){
        $hasil = MahasiswaModel::All();
        return view ('view_mhs',['data_mhs' => $hasil]);
    }

    public function create()
    {
        return view('input_mahasiswa');
    }

    public function proses(Request $req){
        $mahasiswa=new MahasiswaModel();
        $mahasiswa->nim=$req->nim;
        $mahasiswa->nama=$req->nama;
        $mahasiswa->alamat=$req->alamat;
        $mahasiswa->kodejurusan=$req->kodejurusan;
        $mahasiswa->save();

        return redirect('/tugas3');

    }

    public function edit(Request $req)
    {
        $mahasiswa = MahasiswaModel::find($req->nim);
        return view('edit_mahasiswa',compact('mahasiswa'));
    }
    
    public function ubah(Request $req){
        $mahasiswa= MahasiswaModel::find($req->nim);
        $mahasiswa->nama=$req->nama;
        $mahasiswa->alamat=$req->alamat;
        $mahasiswa->kodejurusan=$req->kodejurusan;
        $mahasiswa->save();

        return redirect('/tugas3');
    }

    public function delete($nim){
        $mahasiswa = MahasiswaModel::find($nim);
        $mahasiswa->delete();
        return redirect('/tugas3');

    }
}
