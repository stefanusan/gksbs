<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Majelis extends Model
{
    use HasFactory;

    protected $table = 'majelis';

    protected $fillable = [
        'id',
        'nama',
        'jabatan_gerejawi',
        'tgl_peneguhan',
        'tgl_berhenti',
        'jabatan_pengurus',
        'kelompok',
    ];
}
