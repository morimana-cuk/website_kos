<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class penghuni extends Model
{
    //
    protected $table = 'penghuni';
    protected $primaryKey = 'nik';
    public $timestamps = false;

    protected $fillable = [
        'nik',
        'nama',
        'tgl_masuk',
        'tgl_keluar',
        'no_hp',
    ];

    public function properti()
    {
        return $this->belongsToMany(properti::class, 'sewa', 'id_penghuni', 'id_properti');
    }

    public function GetPenghuni()
    {
        $data = DB::table('penghuni')
            ->leftJoin('sewa', 'penghuni.nik', '=', 'sewa.id_penghuni')
            ->leftJoin('properti', 'sewa.id_properti', '=', 'properti.id_properti')
            ->select(
                'penghuni.nik',
                'penghuni.nama',
                'penghuni.tgl_masuk',
                'penghuni.tgl_keluar',
                'penghuni.no_hp',
                'properti.jenis_properti',
                'properti.no_kamar'
            )
            ->get();

        return $data;
    }

    public function GetPenghuniBYNIK($id)
    {
        $data = DB::table('penghuni')
            ->select(
                'penghuni.nik',
                'penghuni.nama',
                'penghuni.tgl_masuk',
                'penghuni.tgl_keluar',
                'penghuni.no_hp',
            )
            ->where('penghuni.nik', '=', $id) // Menambahkan kondisi WHERE
            ->first();

        return $data;
    }
}
