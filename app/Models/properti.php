<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class properti extends Model
{
    //
    protected $table = 'properti';
    protected $primaryKey = 'id_properti';
    public $timestamps = false;
    // protected $guard=[];
    protected $fillable = [
        'jenis_properti',
        'no_kamar',
        'fasilitas',
        'harga',
        'status',
    ];

    public function penghuni()
    {
        return $this->belongsToMany(penghuni::class, 'sewa', 'id_properti', 'id_penghuni');
    }

    public function ListSewaPropertiBYNik($id)
    {
        return DB::table('properti')
            ->leftJoin('sewa', 'properti.id_properti', '=', 'sewa.id_properti')
            ->leftJoin('penghuni', 'sewa.id_penghuni', '=', 'penghuni.nik')
            ->select('properti.jenis_properti', 'properti.no_kamar')
            ->where('penghuni.nik', '=', $id)
            ->orWhereNull('penghuni.nik')
            ->get();
    }
}
