<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $table = 'barangs'; // Nama tabel
    protected $primaryKey = 'kd_barang'; // Primary key yang digunakan
    public $incrementing = false; // Menunjukkan bahwa primary key tidak auto-increment
    protected $keyType = 'string'; // Tipe data primary key

    protected $fillable = [
        'kd_barang',
        'nama_barang',
        'satuan',
        'harga_jual',
        'harga_beli',
        'stok',
        'status',
    ];
}
