<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'tbl_transaksi';

    protected $primaryKey = 'id_transaksi';

    protected $fillable = [
        'id_mitra',
        'id_mata',
        'nip_pegawai',
        'bidang',
        'jumlah_honor',
        'tanggal_input',
    ];

    public function mitra()
    {
        return $this->belongsTo(Mitra::class, 'id_mitra', 'id_mitra');
    }

    public function mataAnggaran()
    {
        return $this->belongsTo(MataAnggaran::class, 'id_mata', 'id_mata');
    }

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class, 'nip_pegawai', 'nip');
    }
}