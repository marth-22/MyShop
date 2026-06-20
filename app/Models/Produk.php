<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'Produk'; // pastikan sesuai nama tabel di Supabase

    protected $fillable = [
        'nama',
        'harga',
        'deskripsi'
    ];
}