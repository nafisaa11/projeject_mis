<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nilai;

class NilaiController extends Controller
{
    public function index()
    {
        return Nilai::with(['mahasiswa', 'mataKuliah'])->get();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_mahasiswa' => 'required|exists:mahasiswas,id_mahasiswa',
            'id_matakuliah' => 'required|exists:mata_kuliahs,id_matakuliah',
            'nilai_angka' => 'required|numeric',
            'nilai_huruf' => 'required|string|max:2',
        ]);

        return Nilai::create($validated);
    }

    public function show($id)
    {
        return Nilai::with(['mahasiswa', 'mataKuliah'])->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $nilai = Nilai::findOrFail($id);
        $nilai->update($request->all());
        return $nilai;
    }

    public function destroy($id)
    {
        Nilai::destroy($id);
        return response()->json(['message' => 'Deleted successfully']);
    }
}

