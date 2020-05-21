<?php

namespace App\Http\Controllers;

use App\HomePage;
use Illuminate\Http\Request;
use App\Rehabilitasi;
use DB;
class HomePageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
        $url = url('/');
        $rehabilitasi = DB::table('rehabilitasis')
        ->join('pasiens','rehabilitasis.id_user','=','pasiens.id')
        ->select('pasiens.nama','pasiens.no_rm','pasiens.tgl_lahir','pasiens.alamat','rehabilitasis.id','rehabilitasis.keluhan_utama','rehabilitasis.riwayat_sekarang','rehabilitasis.riwayat_dulu','rehabilitasis.pemeriksaan_fisik','rehabilitasis.diagnosis','rehabilitasis.program','terapi','rehabilitasis.jam_keluar','rehabilitasis.kontrol','rehabilitasis.tgl_kontrol','rehabilitasis.intensif','rehabilitasis.ruang_rawat','rehabilitasis.tanda_tangan','rehabilitasis.created_at','rehabilitasis.updated_at')
        ->get();  
        return view('rehabilitasi/rehablist',compact('rehabilitasi','url'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\HomePage  $homePage
     * @return \Illuminate\Http\Response
     */
    public function show(HomePage $homePage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\HomePage  $homePage
     * @return \Illuminate\Http\Response
     */
    public function edit(HomePage $homePage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\HomePage  $homePage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HomePage $homePage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\HomePage  $homePage
     * @return \Illuminate\Http\Response
     */
    public function destroy(HomePage $homePage)
    {
        //
    }
}
