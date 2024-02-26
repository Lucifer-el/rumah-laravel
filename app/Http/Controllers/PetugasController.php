<?php

namespace App\Http\Controllers;

use App\Models\Petugas;
use App\Http\Requests\StorePetugasRequest;
use App\Http\Requests\UpdatePetugasRequest;

class PetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $petugases = Petugas::all();
       return view('petugas.index', compact('petugases'));//
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('petugas.create');//
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePetugasRequest $request, Petugas $petuga)
    {
         $petuga->create($request->all());
        return redirect()->route('petugas.index')->with(['success' => 'Data berhasil disimpan']);//
    }

    /**
     * Display the specified resource.
     */
    public function show(Petugas $petuga)
    {
         return view('petugas.show', compact('petuga'));//
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Petugas $petuga)
    {
        return view('petugas.edit', compact('petuga')); //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePetugasRequest $request, Petugas $petuga)
    {
         $petuga->update($request->all());
       return redirect()->route('petugas.index')->with(['success' => 'Data berhasil diupdate']);//
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Petugas $petuga)
    {
         $petuga->delete();
        return redirect()->route('petugas.index')->with(['success' => 'Data Telah Dihapus']);//
    }
}