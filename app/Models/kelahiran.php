<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelahiran extends Model
{
    use HasFactory;

    public $table = 'kelahiran';
    protected $fillable = [
        'id_kelahiran',
        'nama_anak',
        'tgl_lhr',
        'jk',
        'alamat',
        'nama_ayah',
        'nama_ibu',
        'anakke',
    ];
}