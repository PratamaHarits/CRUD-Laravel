<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use App\Models\Jabatan;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index(Request $request)
    {
        // data jabatan
        $dataJabatan = Jabatan::all();

        if ($request->has('search')) {
            $data = Pegawai::where('peg_nama', 'LIKE', '%' . $request->search . '%')->paginate(5);
        } else {
            $data = Pegawai::paginate(5);
        }
        return view('pegawai.view', compact('data', 'dataJabatan'));
    }

    public function insert(Request $request)
    {
        $data = Pegawai::create($request->all());
        if ($request->hasFile('peg_foto')) {
            $request->file('peg_foto')->move('fotoPegawai', $request->file('peg_foto')->getClientOriginalName());
            $data->peg_foto = $request->file('peg_foto')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('pegawai')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $data = Pegawai::find($id);
        $data->update($request->all());
        if ($request->hasFile('peg_foto')) {
            $request->file('peg_foto')->move('fotoPegawai', $request->file('peg_foto')->getClientOriginalName());
            $data->peg_foto = $request->file('peg_foto')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('pegawai')->with('success', 'Data Berhasil Diubah');
    }

    public function delete($id)
    {
        $data = Pegawai::find($id);
        $data->delete();
        return redirect()->route('pegawai')->with('success', 'Data Berhasil Dihapus');
    }
}
