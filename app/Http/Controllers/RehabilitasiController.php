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
        $this->validate(request(), [
            'id_user' => 'required|numeric',
            'keluhan_utama' => 'required',
            'riwayat_sekarang' => 'required',
            'riwayat_dulu' => 'required',
            'pemeriksaan_fisik' => 'required',
            'diagnosis' => 'required',
            'program' => 'required',
            'terapi' => 'required',
            'jam_keluar' => 'required',
            'kontrol' => 'required|numeric',
            'tgl_kontrol' => 'nullable',
            'intensif' => 'required|numeric',
            'ruang_rawat' => 'nullable',
            'tanda_tangan' => 'required'
        ]);
        $daftar = new Rehabilitasi();
        $daftar->id_user = $request->get('id_user');
        $daftar->keluhan_utama = $request->get('keluhan_utama');
        $daftar->riwayat_sekarang = $request->get('riwayat_sekarang');
        $daftar->riwayat_dulu = $request->get('riwayat_dulu');
        $daftar->pemeriksaan_fisik = $request->get('pemeriksaan_fisik');
        $daftar->diagnosis = $request->get('diagnosis');
        $daftar->program = $request->get('program');
        $daftar->terapi = $request->get('terapi');
        $daftar->jam_keluar = $request->get('jam_keluar');
        $daftar->kontrol = $request->get('kontrol');
        $daftar->tgl_kontrol = $request->get('tgl_kontrol');
        $daftar->intensif = $request->get('intensif');
        $daftar->ruang_rawat = $request->get('ruang_rawat');
        $path = $request->file('tanda_tangan')->store('public/tanda_tangan');
        $path2 = str_replace("public", "storage", $path);
        $daftar->tanda_tangan = $path2;
        $daftar->save();
        return redirect('rehabilitasi')->with('success', 'Data has been added');
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
