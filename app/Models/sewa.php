<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class sewa extends Model
{
    //
    protected $table = 'sewa';
    protected $primaryKey = 'id_sewa';
    public $timestamps = false;
    protected $fillable = [
        'id_penghuni',
        'id_properti',
        'id_sewa',
    ];
}
