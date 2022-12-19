<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kematian extends Model
{
    use HasFactory;

    public $table = 'kematian';
    protected $fillable = [
        'id',
        'nama',
        'nik',
        'jk',
        'tempat_tgl_lahir',
        'agama',
        'hari',
        'tgl',
        'bertempat',
        'penyebab',
        'nama_pelapor',
        'nik_pelapor',
        'tempat_tgl_lahir_pelapor',
        'pekerjaan',
    ];
}
