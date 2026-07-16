<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tahun extends Model
{
    protected $table = 'tbl_tahun';

    protected $primaryKey = 'id_tahun';

    protected $fillable = [
        'tahun'
    ];

    public function mitras()
    {
        return $this->hasMany(Mitra::class, 'id_tahun');
    }

    public function sbmls()
    {
        return $this->hasMany(Sbml::class, 'id_tahun');
    }

    public function mataAnggarans()
    {
        return $this->hasMany(MataAnggaran::class, 'id_tahun');
    }
}