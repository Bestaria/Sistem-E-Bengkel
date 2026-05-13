<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kendaraan;

class KendaraanController extends Controller
{
    public function index()
    {
        $kendaraan = Kendaraan::all();

        return view('kendaraan.index', compact('kendaraan'));
    }

    public function create()
    {
        return view('kendaraan.create');
    }

    public function store(Request $request)
    {
        Kendaraan::create($request->all());

        return redirect('/kendaraan')
            ->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $kendaraan = Kendaraan::findOrFail($id);

        return view('kendaraan.edit', compact('kendaraan'));
    }

    public function update(Request $request, $id)
    {
        $kendaraan = Kendaraan::findOrFail($id);

        $kendaraan->update($request->all());

        return redirect('/kendaraan')
            ->with('success', 'Data berhasil diupdate');
    }

    public function destroy($id)
    {
        $kendaraan = Kendaraan::findOrFail($id);

        $kendaraan->delete();

        return redirect('/kendaraan')
            ->with('success', 'Data berhasil dihapus');
    }
}