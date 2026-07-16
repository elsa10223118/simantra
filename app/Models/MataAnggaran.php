<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MataAnggaran extends Model
{
    protected $table = 'tbl_mata_anggaran';

    protected $primaryKey = 'id_mata';

    protected $fillable = [
        'id_tahun',
        'bidang',
        'nama_kegiatan',
        'akun',
        'jumlah',
        'satuan',
        'harga',
        'total',
        'tanggal_mulai',
        'tanggal_selesai',
    ];

    public function tahun()
    {
        return $this->belongsTo(Tahun::class, 'id_tahun', 'id_tahun');
    }

    public function transaksis()
    {
        return $this->hasMany(Transaksi::class, 'id_mata', 'id_mata');
    }
}