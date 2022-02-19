<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\siswa;
use App\kelas;
use App\spp;


class SiswaController extends Controller
{
    public function index()
    {
        $data = Siswa::paginate(3);
        return view('Siswa.index',compact('data'));
    }

    public function detail($id)
    {
        $detail = siswa::find($id);
        return view( 'siswa.detail',compact('detail') );
    }

    public function create()
    {
        $kelas = kelas::all();
        return view('Siswa.create',compact('kelas'));
    }

    public function store(Request $request)
    {
        
        $create = [
            'nisn' => $request -> nisn,
            'nis' => $request -> nis,
            'nama' => $request -> nama,
            'kelas_id' => $request -> kelas_id,
            'alamat' => $request -> alamat,
            'no_telp' => $request -> no_telp,
            'id_spp' => $request -> id_spp
        ];

        Siswa::create($create);
        return redirect('/Siswa/Index');

    }

    public function edit($id)
    {
        $spp = spp::all();
        $kelas = kelas::all();
        $edit = siswa::find($id);
        return view('Siswa.Edit',compact('edit','kelas','spp'));
    }

    public function update(Request $request, $id)
    {
        $siswa = siswa::findOrFail($id);
        $edit = [
            'nisn' => $request -> nisn,
            'nis' => $request -> nis,
            'nama' => $request -> nama,
            'kelas_id' => $request -> kelas_id,
            'alamat' => $request -> alamat,
            'no_telp' => $request -> no_telp,
            'id_spp' => $request -> id_spp
        ];

        $siswa->update($edit);
        return redirect('/Siswa/Index');

    }

    public function delete($id)
    {
        Siswa::find($id)->delete();
        return redirect('/Siswa/Index');
    }

}
