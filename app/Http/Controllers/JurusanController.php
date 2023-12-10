<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JurusanModel;

class JurusanController extends Controller
{
    public function tampil_jurusan(){
        $hasil = JurusanModel::All();
        return view ('view_jurusan',['data_jurusan' => $hasil]);
    }
    public function create()
    {
        return view('input_jurusan');
    }
    public function delete($id_jurusan)
    {
        $jurusan= JurusanModel::find($id_jurusan);
        
        $jurusan->delete();
        return redirect('/tugas4');
    }
    public function proses(Request $req){
        $jurusan=new JurusanModel();
        $jurusan->nama_jurusan=$req->nama_jurusan;
        $jurusan->save();

        return redirect('/tugas4');
    }
    public function edit(Request $req)
    {
        $jurusan=JurusanModel::find($req->id_jurusan);

        
        return view('edit_jurusan',compact('jurusan'));
    }
    public function update(Request $request)
    {
        $jurusan=JurusanModel::find($req->id_jurusan);
        $jurusan->nama_jurusan=$req->nama_jurusan;
        $jurusan->save();
        return redirect('/tugas4');
    }


}
