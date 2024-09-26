<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Masuk extends Model
{
    use HasFactory;

    // Tentukan primary key
    protected $primaryKey = 'kd_masuk';
    public $incrementing = false;
    protected $keyType = 'string';

    // Kolom yang bisa diisi
    protected $fillable = [
        'kd_masuk',
        'tgl_masuk',
        'kd_admin',
        'kd_supplier',
        'total_masuk',
    ];

    // Relasi ke tabel Supplier
    public function supplier()
    {
        return $this->belongsTo(Supplier::class, 'kd_supplier', 'kd_supplier');
    }
}

