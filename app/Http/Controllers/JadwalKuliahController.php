<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jadwal_kuliah;

class JadwalKuliahController extends Controller
{
    public function index()
    {
        return Jadwal_kuliah::with('mataKuliah')->get();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_matakuliah' => 'required|exists:mata_kuliahs,id_matakuliah',
            'hari' => 'required|string',
            'tanggal' => 'required|date',
            'ruangan' => 'required|string',
            'jam_awal' => 'required',
            'jam_akhir' => 'required',
        ]);

        return Jadwal_kuliah::create($validated);
    }

    public function show($id)
    {
        return Jadwal_kuliah::with('mataKuliah')->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $jadwal = Jadwal_kuliah::findOrFail($id);
        $jadwal->update($request->all());
        return $jadwal;
    }

    public function destroy($id)
    {
        Jadwal_kuliah::destroy($id);
        return response()->json(['message' => 'Deleted successfully']);
    }
}
