<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mengambil semua data mahasiswa dari database
        $mahasiswa = Mahasiswa::all();
        return view('mahasiswa.index', compact('mahasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data yang diterima dari form
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'nrp' => 'required|string|max:255|unique:mahasiswas',
            'email' => 'required|email|max:255|unique:mahasiswas',
            'prodi' => 'required|string|max:255',
            'kelas' => 'required|string|max:255',
            'no_telp' => 'nullable|string|max:15',
            'tanggal_lahir' => 'nullable|date',
            'tempat_lahir' => 'nullable|string|max:255',
            'jenis_kelamin' => 'nullable|string|max:10',
            'agama' => 'nullable|string|max:50',
        ]); 
        // Menyimpan data mahasiswa ke database
        Mahasiswa::create($validatedData);
        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('mahasiswa.index')->with('success', 'Mahasiswa berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('mahasiswa.show', [
            'mahasiswa' => Mahasiswa::findOrFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('mahasiswa.edit', [
            'mahasiswa' => Mahasiswa::findOrFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validasi data yang diterima dari form
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'nrp' => 'required|string|max:255|unique:mahasiswas,nrp,' . $id . ',id_mahasiswa',
            'email' => 'required|email|max:255|unique:mahasiswas,email,' . $id . ',id_mahasiswa',
            'prodi' => 'required|string|max:255',
            'kelas' => 'required|string|max:255',
            'no_telp' => 'nullable|string|max:15',
            'tanggal_lahir' => 'nullable|date',
            'tempat_lahir' => 'nullable|string|max:255',
            'jenis_kelamin' => 'nullable|string|max:10',
            'agama' => 'nullable|string|max:50',
        ]);
        // Mengupdate data mahasiswa di database
        Mahasiswa::where('id_mahasiswa', $id)->update($validatedData);
        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('mahasiswa.index')->with('success', 'Mahasiswa berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->delete();

        return redirect()->route('mahasiswa.index')->with('success', 'Mahasiswa berhasil dihapus.');

    }
}
