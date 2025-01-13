<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class komplain extends Model
{
    //
    protected $table = 'komplain';
    protected $primaryKey = 'id_komplain';
    public $timestamps = false;
    protected $fillable = [
        'jenis_properti',
        'no_kamar',
        'komplain',
        'nik',
        'tgl_komplain',
        'status'
    ];

    public function komplain($nik)
    {
        $results = DB::table('komplain')
            ->join('penghuni', 'komplain.nik', '=', 'penghuni.nik')
            ->join('sewa', 'penghuni.nik', '=', 'sewa.id_penghuni')
            ->join('properti', 'sewa.id_properti', '=', 'properti.id_properti')
            ->where('komplain.nik', $nik)
            ->select(
                'penghuni.nama',
                'properti.jenis_properti',
                'properti.no_kamar',
                'komplain.tgl_komplain',
                'komplain.komplain',
                'komplain.status'
            )
            ->get();
            return $results;
    }

    public function komplainAll()
    {
        $results = DB::table('komplain')
            ->join('penghuni', 'komplain.nik', '=', 'penghuni.nik')
            ->join('sewa', 'penghuni.nik', '=', 'sewa.id_penghuni')
            ->join('properti', 'sewa.id_properti', '=', 'properti.id_properti')
            ->select(
                'komplain.id_komplain',
                'penghuni.nama',
                'properti.jenis_properti',
                'properti.no_kamar',
                'komplain.tgl_komplain',
                'komplain.komplain',
                'komplain.status'
            )
            ->get();
            return $results;
    }

    public function komplainById($id)
    {
        $results = DB::table('komplain')
            ->join('penghuni', 'komplain.nik', '=', 'penghuni.nik')
            ->join('sewa', 'penghuni.nik', '=', 'sewa.id_penghuni')
            ->join('properti', 'sewa.id_properti', '=', 'properti.id_properti')
            ->where('komplain.id_komplain', $id)
            ->select(
                'komplain.id_komplain',
                'penghuni.nama',
                'properti.jenis_properti',
                'properti.no_kamar',
                'komplain.tgl_komplain',
                'komplain.komplain',
                'komplain.status'
            )
            ->first();
            return $results;
    }
}
