<?php

namespace App\Models\Latsar;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Haruncpi\LaravelUserActivity\Traits\Loggable;

class Peserta extends Model
{
    use HasFactory, Loggable;

    protected $fillable = [
        'latsar_id',
        'peserta_id',
        'angkatan',
    ];

    protected $primaryKey = 'id';
    protected $table = 'latsar_peserta';
    const tableName = 'latsar_peserta';
    const image_folder = '/assets/latsar/peserta';
    const image_default = 'assets/latsar/peserta/default.jpg';
}
