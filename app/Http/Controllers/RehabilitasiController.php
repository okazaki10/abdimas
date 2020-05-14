<?php

namespace App\Http\Controllers;

use App\Rehabilitasi;
use Illuminate\Http\Request;

class RehabilitasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('rehabilitasi.rehabilitasi');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rehabilitasi = $this->validate(request(), [
            'id_user' => 'required',
            'keluhan_utama' => 'required',
            'riwayat_sekarang' => 'required',
            'riwayat_dulu' => 'required',
            'pemeriksaan_fisik' => 'required',
            'diagnosis' => 'required',
            'program' => 'required',
            'terapi' => 'required',
            'jam_keluar' => 'required',
            'kontrol' => 'required',
            'tgl_kontrol' => 'required',
            'intensif' => 'required',
            'ruang_rawat' => 'required',
            'tanda_tangan' => 'required'
        ]);
        Rehabilitasi::create($rehabilitasi);
        return redirect('rehabilitasi')->with('success', 'Semen has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Rehabilitasi  $rehabilitasi
     * @return \Illuminate\Http\Response
     */
    public function show(Rehabilitasi $rehabilitasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Rehabilitasi  $rehabilitasi
     * @return \Illuminate\Http\Response
     */
    public function edit(Rehabilitasi $rehabilitasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rehabilitasi  $rehabilitasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rehabilitasi $rehabilitasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rehabilitasi  $rehabilitasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rehabilitasi $rehabilitasi)
    {
        //
    }
}
