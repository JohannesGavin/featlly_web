<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Katalog extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'kategori',
        'detail',
        'harga',
        'gambar',
    ];

    protected $casts = [
        'gambar' => 'json',
    ];
}
