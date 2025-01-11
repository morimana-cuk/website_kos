<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
}
