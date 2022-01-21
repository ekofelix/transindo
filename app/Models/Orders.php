<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_kota',
        'nama_kota_tujuan',
        'kendaraan',
        'harga',
        'berat'
    ];
}
