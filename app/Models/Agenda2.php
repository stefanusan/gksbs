<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda2 extends Model
{
    use HasFactory;

    protected $table = 'agenda2s';

    protected $fillable = [
        'kegiatan',
        'waktu',
        'sasaran',
        'jejaring',
        'pelaksana',
        'tahun',
        'output'
    ];
}
