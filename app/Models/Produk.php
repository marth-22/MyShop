<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    // Nama tabel (opsional kalau tabel kamu "produk" atau "produks")
    protected $table = 'Produk';

    // Kolom yang boleh diisi (WAJIB untuk create & update)
    protected $fillable = [
        'nama',
        'harga'
    ];
}