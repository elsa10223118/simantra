<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mitra extends Model
{
    protected $table = 'tbl_mitra';

    protected $primaryKey = 'id_mitra';

    protected $fillable = [
        'id_tahun',
        'id_sobat',
        'nik',
        'nama',
        'jenis_kelamin',
        'alamat_lengkap',
        'no_hp',
        'email',
    ];

    public function tahun()
    {
        return $this->belongsTo(Tahun::class, 'id_tahun', 'id_tahun');
    }

    public function transaksis()
    {
        return $this->hasMany(Transaksi::class, 'id_mitra', 'id_mitra');
    }
}