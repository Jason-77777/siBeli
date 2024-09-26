<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DMasuk extends Model
{
    use HasFactory;

    protected $table = 'd_masuks'; 
    protected $primaryKey = 'id_masuk'; 
    public $incrementing = false; 
    protected $keyType = 'string'; 

    protected $fillable = [
        'id_masuk',
        'kd_barang_beli',
        'jumlah',
        'subtotal',
    ];
}
