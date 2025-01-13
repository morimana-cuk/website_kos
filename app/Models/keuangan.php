<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class keuangan extends Model
{
    //
    protected $table = 'Keuangan';
    protected $primaryKey = 'id_keuangan';
    public $timestamps = false;
    protected $fillable = [
        'jenis_properti',
        'no_kamar',
        'jenis_pembayaran',
        'bukti_pembayaran',
        'nik',
        'tgl_bayar',
        'tagihan'
    ];

    public function keuangan($nik)
    {

        $results = DB::table('keuangan')
            ->join('penghuni', 'keuangan.nik', '=', 'penghuni.nik')
            ->join('sewa', 'penghuni.nik', '=', 'sewa.id_penghuni')
            ->join('properti', 'sewa.id_properti', '=', 'properti.id_properti')
            ->where('keuangan.nik', $nik)
            ->select(
                'keuangan.id_keuangan',
                'penghuni.nama',
                'properti.jenis_properti',
                'properti.no_kamar',
                'keuangan.tagihan',
                'keuangan.tgl_bayar',
                'keuangan.status'
            )
            ->get();
        return $results;
    }

    public function keuanganAll()
    {
        $results = DB::table('keuangan')
            ->join('penghuni', 'keuangan.nik', '=', 'penghuni.nik')
            ->join('sewa', 'penghuni.nik', '=', 'sewa.id_penghuni')
            ->join('properti', 'sewa.id_properti', '=', 'properti.id_properti')
            ->select(
                'keuangan.id_keuangan',
                'penghuni.nama',
                'properti.jenis_properti',
                'properti.no_kamar',
                'keuangan.tagihan',
                'keuangan.tgl_bayar',
                'keuangan.status'
            )
            ->get();
        return $results;
    }

    public function keuanganById($id)
    {
        $results = DB::table('keuangan')
            ->join('penghuni', 'keuangan.nik', '=', 'penghuni.nik')
            ->join('sewa', 'penghuni.nik', '=', 'sewa.id_penghuni')
            ->join('properti', 'sewa.id_properti', '=', 'properti.id_properti')
            ->where('keuangan.id_keuangan', $id)
            ->select(
                'keuangan.id_keuangan',
                'penghuni.nama',
                'properti.jenis_properti',
                'properti.no_kamar',
                'keuangan.tagihan',
                'keuangan.tgl_bayar',
                'keuangan.bukti_pembayaran',
                'keuangan.status'
            )
            ->first();
        return $results;
    }
    //for dashboard
    
}
