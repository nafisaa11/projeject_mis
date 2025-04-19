<?php

namespace App\Http\Controllers;

use App\Models\Frs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $frs = Frs::with(['mahasiswa', 'mataKuliah'])->get();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Frs $frs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Frs $frs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Frs $frs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Frs $frs)
    {
        //
    }
}
