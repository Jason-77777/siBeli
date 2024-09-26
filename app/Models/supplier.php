<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $primaryKey = 'kd_supplier';
    public $incrementing = false; 
    protected $keyType = 'string'; 

    protected $fillable = [
        'kd_supplier',
        'nama_supplier',
        'alamat',
    ];
}
