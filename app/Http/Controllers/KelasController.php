<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Http\Requests\StoreKelasRequest;
use App\Http\Requests\UpdateKelasRequest;


class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $kelass = Kelas::select('id_kelas', 'nama_kelas', 'kompetensi_keahlian')->get();
        return view('kelas.index', compact('kelass'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("kelas.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreKelasRequest $request, Kelas $kela)
    {
        //
        $kela->create($request->all());   
        
        return redirect()->route("kelas.index")->with(['success' => 'Data'. $request['nama_kelas'] . 'Berhasil Disimpan']);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $kelas = Kelas::find($id);
        return view('kelas.show', compact('kelas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kelas $kela)
    {
        //
        return view ('kelas.edit', compact('kela'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKelasRequest $request, Kelas $kela)
    {
        //
        $kela->update($request->all());   
        return redirect()->route("kelas.index")->with(['success' => 'Data Berhasil diedit']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kelas $kela)
    {
        //
        $kela->delete();
        return redirect()->route('kelas.index')->with(['success'=>'Data Telah Dihapus']);
    }
}