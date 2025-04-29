<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JadwalKuliah;

class JadwalKuliahController extends Controller
{
    public function index()
    {
        return JadwalKuliah::with('mataKuliah')->get();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_matakuliah' => 'required|exists:mata_kuliahs,id_matakuliah',
            'id_dosen' => 'required|exists:dosens,id_dosen',
            'hari' => 'required|string',
            'tanggal' => 'required|date',
            'ruangan' => 'required|string',
            'jam_awal' => 'required',
            'jam_akhir' => 'required',
        ]);

        return JadwalKuliah::create($validated);
    }

    public function show($id)
    {
        return JadwalKuliah::with('mataKuliah')->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $jadwal = JadwalKuliah::findOrFail($id);
        $jadwal->update($request->all());
        return $jadwal;
    }

    public function destroy($id)
    {
        JadwalKuliah::destroy($id);
        return response()->json(['message' => 'Deleted successfully']);
    }
}
