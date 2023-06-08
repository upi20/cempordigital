<?php

namespace App\Models\SPK\Kegiatan\Penilaian;

use App\Models\SPK\Kegiatan\Kegiatan;
use App\Models\SPK\Kegiatan\KegiatanPeserta;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Haruncpi\LaravelUserActivity\Traits\Loggable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\Datatables\Datatables;

class Peserta extends Model
{
    use HasFactory, Loggable;

    protected $fillable = [
        'id',
        'peserta_id',
        'penilaian_id',
        'nilai',
    ];

    protected $primaryKey = 'id';
    protected $table = Penilaian::tableName . '_peserta';
    const tableName = Penilaian::tableName . '_peserta';

    public function kriteria()
    {
        return $this->belongsTo(Kriteria::class, 'peserta_id', 'id');
    }

    public function penilaian()
    {
        return $this->belongsTo(Penilaian::class, 'penilaian_id', 'id');
    }

    public static function datatable(Kegiatan $spk)
    {
        $kriterias = Penilaian::orderBy('kode')->get();
        $alternatifs = KegiatanPeserta::with(['nilais.kriteria'])->where('spk_id', $spk->id)->get();

        // sort nilai berdasarkan kriteria
        $results = [];
        foreach ($alternatifs as $alternatif) {
            $new_nilais = [];
            foreach ($kriterias as $kriteria) {
                $get_nilai = null;
                foreach ($alternatif->nilais as $nilai) {
                    if ($nilai->peserta_id == $kriteria->id) $get_nilai = $nilai;
                }
                $new_nilais[] = $get_nilai;
            }

            unset($alternatif->nilais);
            $alternatif['nilais'] = $new_nilais;
            $results[] = $alternatif;
        }

        return [
            'header' => $kriterias,
            'body' => $results
        ];
    }

    public static function getEdit(KegiatanPeserta $alternatif)
    {
        $kriterias = Penilaian::with(['nilais' => fn ($query) => $query->where('penilaian_id', $alternatif->id)])
            ->orderBy('kode')->get();
        $alternatif->kriterias = $kriterias;
        return $alternatif;
    }
}
