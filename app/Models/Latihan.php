<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Latihan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_pengguna',
        'nama_latihan',
        'kategori',
        'durasi',
        'intensitas',
    ];
}
