<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rehabilitasi extends Model
{
    protected $fillable = ['id_user','keluhan_utama','riwayat_sekarang','riwayat_dulu','pemeriksaan_fisik','diagnosis','program','terapi','jam_keluar','kontrol','tgl_kontrol','intensif','ruang_rawat','tanda_tangan'];
}
