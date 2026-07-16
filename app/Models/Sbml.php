<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sbml extends Model
{
    protected $table = 'tbl_sbml';

    protected $primaryKey = 'id_sbml';

    protected $fillable = [
        'id_tahun',
        'bidang',
        'maksimal_honor',
    ];

    public function tahun()
    {
        return $this->belongsTo(Tahun::class, 'id_tahun', 'id_tahun');
    }
}