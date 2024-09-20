<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assets extends Model
{
    use HasFactory;

    protected $fillable = [
        'namaBarang',
        'kodeAsset',
        'qrCode',
        'kodeTelkom',
        'serialNumber',
        'lokasi',
        'keterangan',
        'kondisi',
        'status',
        'pelabuhan'
    ];
}
