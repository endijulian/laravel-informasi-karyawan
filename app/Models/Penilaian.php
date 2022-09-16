<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penilaian extends Model
{
    use HasFactory;

    protected $table = 'data_penilaian';

    protected $fillable = [
        'karyawan_id',
        'tanggal_penilaian',
        'periode',
        'absensi',
        'pemahaman',
        'pencapaian',
        'kebersihan_lingkungan',
        'kerapihan',
        'perilaku',
        'total'
    ];

    public function karyawan(){
        return $this->belongsTo('App\Models\Karyawan','karyawan_id');
    }
}
