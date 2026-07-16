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
        'no_hp',
        'foto',
        'role_akun',
        'operator_bidang',
    ];

    public function transaksis()
    {
        return $this->hasMany(Transaksi::class, 'nip_pegawai', 'nip');
    }
}