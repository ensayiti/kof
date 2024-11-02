<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PendaftarSamarinda extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'tanggal_lahir',
        'no_handphone',
        'email',
        'daerah',
        'pesan',
    ];
}
