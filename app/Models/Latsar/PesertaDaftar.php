<?php

namespace App\Models\Latsar;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Haruncpi\LaravelUserActivity\Traits\Loggable;

class PesertaDaftar extends Model
{
    use HasFactory, Loggable;

    protected $fillable = [
        'latsar_id',
        'peserta_id',
        'tanggal',
        'angkatan',
    ];

    protected $primaryKey = 'id';
    protected $table = 'latsar_peserta_daftar';
    const tableName = 'latsar_peserta_daftar';
    const image_folder = '/assets/latsar/peserta/daftar';
    const image_default = 'assets/latsar/peserta/daftar/default.jpg';
}
