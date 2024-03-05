<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Absen extends Model
{
    use HasFactory;
    //
    protected $fillable = [
        'id_pegawai',
        'jenis_absen',
        'waktu_absen',
    ];
}
