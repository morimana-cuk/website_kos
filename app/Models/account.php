<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class account extends Authenticatable
{
    //\
    use Notifiable;
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
