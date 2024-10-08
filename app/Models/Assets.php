<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assets extends Model
{
    use HasFactory;
    protected $primaryKey = 'uuid';
    public $incrementing = false;
    protected $table = 'assets';

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (empty($model->uuid)) {
                $model->uuid = (string) \Illuminate\Support\Str::uuid();
            }
            $latestNoUrut = static::max('noUrut'); 
            $model->noUrut = $latestNoUrut ? $latestNoUrut + 1 : 1; // Increment or start from 1
        });

    }


    protected $fillable = [
        'noUrut',
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
