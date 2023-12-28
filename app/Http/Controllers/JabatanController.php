<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use Illuminate\Http\Request;

class JabatanController extends Controller
{

    public function index()
    {
        $data = Jabatan::paginate(5);
        return view('jabatan.view', compact('data'));
    }

    public function insert(Request $request)
    {
        $data = Jabatan::create($request->all());
        return redirect()->route('jabatan')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $data = Jabatan::find($id);
        $data->update($request->all());
        return redirect()->route('jabatan')->with('success', 'Data Berhasil Diubah');
    }

    public function delete($id)
    {
        $data = Jabatan::find($id);
        $data->delete();
        return redirect()->route('jabatan')->with('success', 'Data Berhasil Dihapus');
    }
}
