<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table = 'tbl_pegawai';

    protected $primaryKey = 'nip';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'nip',
        'nama_pegawai',
        'username',
        'password',
        'no_hp',
        'foto',
        'role_akun',
        'operator_bidang'
    ];

    protected $hidden = [
        'password'
    ];
}