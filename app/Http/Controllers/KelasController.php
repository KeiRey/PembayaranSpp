<?php

namespace App\Http\Controllers;

use App\kelas;

use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index()
    {
        $data = kelas::paginate(3);
        return view('Kelas.index',compact('data'));
    }

    public function create()
    {
        return view('Kelas.create');
    }

    public function store(Request $request)
    {
        
        $create = [
            'kelas' => $request -> kelas,
            'kompetensi_keahlian' => $request -> kompetensi_keahlian,
            
        ];

        kelas::create($create);
        return redirect('/Kelas/Index');

    }

    public function edit($id)
    {
       
        $edit = kelas::find($id);
        return view('Kelas.Edit',compact('edit'));
    }

    public function update(Request $request, $id)
    {
        $kelas = kelas::findOrFail($id);
        $edit = [
            'kelas' => $request -> kelas,
            'kompetensi_keahlian' => $request -> kompetensi_keahlian,
        ];

        $kelas->update($edit);
        return redirect('/Kelas/Index');

    }

    public function delete($id)
    {
        kelas::find($id)->delete();
        return redirect('/Kelas/Index');
    }

}
