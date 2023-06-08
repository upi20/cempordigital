<?php

namespace App\Models\SPK\Kegiatan;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Haruncpi\LaravelUserActivity\Traits\Loggable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\Datatables\Datatables;
use Cviebrock\EloquentSluggable\Sluggable;

class Kegiatan extends Model // spk
{
    use HasFactory, Loggable, Sluggable;

    protected $fillable = [
        'id',
        'nama',
        'tanggal_dari',
        'tanggal_sampai',
        'slug',
        'keterangan',
        'status',
    ];

    protected $primaryKey = 'id';
    protected $table = 'spk_kegiatan';
    const tableName = 'spk_kegiatan';
    const image_folder = '/assets/spk/wp';

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'nama'
            ]
        ];
    }
}
