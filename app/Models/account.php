<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class account extends Model
{
    //
    protected $table = 'account';
    protected $primaryKey = 'id_account';
    public $timestamps = false;

    protected $fillable = [
        'username',
        'password',
        'role',
        'nik',
    ];
}
