<?php

namespace App\Models;

use App\Models\Address\District;
use App\Models\Address\Province;
use App\Models\Address\Regencie;
use App\Models\Address\Village;
use App\Models\Latsar\Latsar;
use App\Models\Latsar\PesertaDaftar;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\Datatables\Datatables;
use Haruncpi\LaravelUserActivity\Traits\Loggable;
use Illuminate\Support\Facades\Hash;

class Peserta extends Model
{
    use HasFactory, Loggable;

    protected $fillable = [
        'user_id',
        'nopeserta',
        'nik',
        'nama',
        'email',
        'no_whatsapp',
        'tempat_lahir',
        'tanggal_lahir',
        'usia_saat_daftar',
        'jenis_kelamin',
        'agama',
        'pendidikan_terakhir',
        'ktp_provinsi_id',
        'ktp_kab_kot_id',
        'ktp_kecamatan_id',
        'ktp_des_kel_id',
        'ktp_alamat_lengkap',
        'ktp_rt',
        'ktp_rw',
        'ktp_file',
        'ktp_ada',
        'kk_file',
        'domisili', // asal
        'domisili_provinsi_id',
        'domisili_kab_kot_id',
        'domisili_kecamatan_id',
        'domisili_des_kel_id',
        'domisili_alamat_lengkap',
        'domisili_rt',
        'domisili_rw',
        'domisili_file',

        // kontak
        'instagram',
        'facebook',
        'twitter',

        'alasan',
        'usaha',
        'kendalau_saha',
        'sekilas_usaha',
        'produk',
        'pelatihan_dispora_sebelumnya',
        'pelatihan_lainnya',
        'komunitas',
        'ig_komunitas',
        'profil_komunitas',
        'tentang_diri',
        'plus_minus_diri',
        'prestasi_diri',
        'kegagalan',
        'impian',
        'wawasan_latsar',
        'komitmen',
        'anak_ke_berapa',
        'anak_ke_berapa_dari',
        'harapan',
        'pengertian_pengusaha',
        'satusatunya',
        'cocok_pengusaha',
        'jika_tidak_jadi_pengusaha',
        'bidang',
        'bidang_spesifik',
        'persetujuan',
        'kurasi_pernah_lulus',
        'kurasi_angkatan',
        'blokir',
    ];

    protected $primaryKey = 'id';
    protected $table = 'peserta';
    const tableName = 'peserta';
    const image_folder = '/assets/peserta';
    const image_default = 'assets/peserta/default.jpg';


    public static function datatable(Request $request): mixed
    {
        $query = [];
        // list table
        $table = static::tableName;

        $t_prov = Province::tableName;
        $t_kab = Regencie::tableName;
        $t_kec = District::tableName;
        $t_des = Village::tableName;

        $base_url_image_folder = url(str_replace('./', '', static::image_folder)) . '/';

        // cusotm query
        // ========================================================================================================
        // creted at and updated at
        $date_format_fun = function (string $select, string $format, string $alias) use ($table): array {
            $str = <<<SQL
                (DATE_FORMAT($table.$select, '$format'))
            SQL;
            return [$alias => $str, ($alias . '_alias') => $alias];
        };

        $c_created = 'created';
        $c_created_str = 'created_str';
        $c_updated = 'updated';
        $c_updated_str = 'updated_str';
        $c_tanggal_lahir_str = 'tanggal_lahir_str';
        $query = array_merge($query, $date_format_fun('created_at', '%d-%b-%Y', $c_created));
        $query = array_merge($query, $date_format_fun('created_at', '%W, %d %M %Y %H:%i:%s', $c_created_str));
        $query = array_merge($query, $date_format_fun('updated_at', '%d-%b-%Y', $c_updated));
        $query = array_merge($query, $date_format_fun('updated_at', '%W, %d %M %Y %H:%i:%s', $c_updated_str));
        $query = array_merge($query, $date_format_fun('tanggal_lahir', '%d-%b-%Y', $c_tanggal_lahir_str));

        // ktp_file
        $c_ktp_file_link = 'ktp_file_link';
        $query[$c_ktp_file_link] = <<<SQL
                (concat('$base_url_image_folder',$table.ktp_file))
        SQL;
        $query["{$c_ktp_file_link}_alias"] = $c_ktp_file_link;

        // ktp_ada
        $c_ktp_ada_str = 'ktp_ada_str';
        $query[$c_ktp_ada_str] = <<<SQL
                (if($table.ktp_ada = 1, 'Ada', 'Tidak Ada'))
        SQL;
        $query["{$c_ktp_ada_str}_alias"] = $c_ktp_ada_str;

        $c_ktp_ada_class = 'ktp_ada_class';
        $query[$c_ktp_ada_class] = <<<SQL
                (if($table.ktp_ada = 1, 'text-success', 'text-danger'))
        SQL;
        $query["{$c_ktp_ada_class}_alias"] = $c_ktp_ada_class;

        // domisili
        $c_domisili_str = 'domisili_str';
        $query[$c_domisili_str] = <<<SQL
                (if($table.domisili = 1, 'Kota Bandung', 'Luar Kota Bandung'))
        SQL;
        $query["{$c_domisili_str}_alias"] = $c_domisili_str;

        $c_domisili_class = 'domisili_class';
        $query[$c_domisili_class] = <<<SQL
                (if($table.domisili = 1, 'text-success', 'text-danger'))
        SQL;
        $query["{$c_domisili_class}_alias"] = $c_domisili_class;

        // Alamat ktp ===
        // ktp_provinsi
        $c_ktp_provinsi = 'ktp_provinsi';
        $query[$c_ktp_provinsi] = "ktp_prov.name";
        $query["{$c_ktp_provinsi}_alias"] = $c_ktp_provinsi;

        // ktp_kab_kot
        $c_ktp_kab_kot = 'ktp_kab_kot';
        $query[$c_ktp_kab_kot] = "ktp_kab.name";
        $query["{$c_ktp_kab_kot}_alias"] = $c_ktp_kab_kot;

        // ktp_kecamatan
        $c_ktp_kecamatan = 'ktp_kecamatan';
        $query[$c_ktp_kecamatan] = "ktp_kec.name";
        $query["{$c_ktp_kecamatan}_alias"] = $c_ktp_kecamatan;

        // ktp_des_kel
        $c_ktp_des_kel = 'ktp_des_kel';
        $query[$c_ktp_des_kel] = "ktp_des.name";
        $query["{$c_ktp_des_kel}_alias"] = $c_ktp_des_kel;


        // Alamat domisili ===
        // domisili_provinsi
        $c_domisili_provinsi = 'domisili_provinsi';
        $query[$c_domisili_provinsi] = "domisili_prov.name";
        $query["{$c_domisili_provinsi}_alias"] = $c_domisili_provinsi;

        // domisili_kab_kot
        $c_domisili_kab_kot = 'domisili_kab_kot';
        $query[$c_domisili_kab_kot] = "domisili_kab.name";
        $query["{$c_domisili_kab_kot}_alias"] = $c_domisili_kab_kot;

        // domisili_kecamatan
        $c_domisili_kecamatan = 'domisili_kecamatan';
        $query[$c_domisili_kecamatan] = "domisili_kec.name";
        $query["{$c_domisili_kecamatan}_alias"] = $c_domisili_kecamatan;

        // domisili_des_kel
        $c_domisili_des_kel = 'domisili_des_kel';
        $query[$c_domisili_des_kel] = "domisili_des.name";
        $query["{$c_domisili_des_kel}_alias"] = $c_domisili_des_kel;


        // tanggal_lahir
        $c_tanggal_lahir_class = 'tanggal_lahir_class';
        $query[$c_tanggal_lahir_class] = <<<SQL
                (if($table.usia_saat_daftar >= 16 and $table.usia_saat_daftar <=30, 'text-success', 'text-danger'))
        SQL;
        $query["{$c_tanggal_lahir_class}_alias"] = $c_tanggal_lahir_class;

        // ========================================================================================================


        // ========================================================================================================
        // select raw as alias
        $sraa = function (string $col) use ($query): string {
            return $query[$col] . ' as ' . $query[$col . '_alias'];
        };
        $model_filter = [
            $c_created,
            $c_created_str,
            $c_updated,
            $c_updated_str,
            $c_ktp_file_link,
            $c_ktp_ada_str,
            $c_ktp_ada_class,
            $c_domisili_str,
            $c_domisili_class,

            $c_ktp_provinsi,
            $c_ktp_kab_kot,
            $c_ktp_kecamatan,
            $c_ktp_des_kel,
            $c_domisili_provinsi,
            $c_domisili_kab_kot,
            $c_domisili_kecamatan,
            $c_domisili_des_kel,
            $c_tanggal_lahir_class,
            $c_tanggal_lahir_str,
        ];

        $to_db_raw = array_map(function ($a) use ($sraa) {
            return DB::raw($sraa($a));
        }, $model_filter);
        // ========================================================================================================


        // Select =====================================================================================================
        $model = static::select(array_merge([
            DB::raw("$table.*"),
        ], $to_db_raw))
            ->leftJoin("$t_prov as ktp_prov", "$table.ktp_provinsi_id", "=", "ktp_prov.id")
            ->leftJoin("$t_kab as ktp_kab", "$table.ktp_kab_kot_id", "=", "ktp_kab.id")
            ->leftJoin("$t_kec as ktp_kec", "$table.ktp_kecamatan_id", "=", "ktp_kec.id")
            ->leftJoin("$t_des as ktp_des", "$table.ktp_des_kel_id", "=", "ktp_des.id")
            ->leftJoin("$t_prov as domisili_prov", "$table.domisili_provinsi_id", "=", "domisili_prov.id")
            ->leftJoin("$t_kab as domisili_kab", "$table.domisili_kab_kot_id", "=", "domisili_kab.id")
            ->leftJoin("$t_kec as domisili_kec", "$table.domisili_kecamatan_id", "=", "domisili_kec.id")
            ->leftJoin("$t_des as domisili_des", "$table.domisili_des_kel_id", "=", "domisili_des.id");

        // Filter =====================================================================================================
        // filter tanggal lahir
        $filter = $request->filter;
        if (isset($filter['tanggal_lahir_dari'])) {
            $model->where("$table.tanggal_lahir", '>=', $filter['tanggal_lahir_dari']);
        }

        if (isset($filter['tanggal_lahir_sampai'])) {
            $model->where("$table.tanggal_lahir", '<=', $filter['tanggal_lahir_sampai']);
        }

        // filter check
        $f_c = function (string $param) use ($request): mixed {
            $filter = $request->filter;
            return isset($filter[$param]) ? $filter[$param] : false;
        };

        // filter custom
        $filters = [
            'ktp_provinsi_id',
            'ktp_kab_kot_id',
            'ktp_kecamatan_id',
            'ktp_des_kel_id',
            'domisili',
            'domisili_provinsi_id',
            'domisili_kab_kot_id',
            'domisili_kecamatan_id',
            'domisili_des_kel_id',
            'kurasi_angkatan',
        ];

        foreach ($filters as  $f) {
            if ($f_c($f) !== false) {
                $model->whereRaw("$table.$f='{$f_c($f)}'");
            }
        }
        // ========================================================================================================


        // ========================================================================================================
        $datatable = Datatables::of($model)->addIndexColumn();

        // search
        // ========================================================================================================
        $query_filter = $query;
        $datatable->filter(function ($query) use ($model_filter, $query_filter, $table) {
            $search = request('search');
            $search = isset($search['value']) ? $search['value'] : null;
            if ((is_null($search) || $search == '') && count($model_filter) > 0) return false;

            // tambah pencarian
            $static = new static();
            $search_add = $static->fillable;
            $search_add = array_map(function ($v) use ($table) {
                return "$table.$v";
            }, $search_add);
            $search_arr = array_merge($model_filter, $search_add);

            // pake or where
            $search_str = "(";
            foreach ($search_arr as $k => $v) {
                $or = (($k + 1) < count($search_arr)) ? 'or' : '';
                $column = isset($query_filter[$v]) ? $query_filter[$v] : $v;
                $search_str .= "$column like '%$search%' $or ";
            }

            $search_str .= ")";
            $query->whereRaw($search_str);
        });

        // create datatable
        return $datatable->make(true);
    }

    // import data
    public static function import()
    {
        $file_excel = public_path('Sample.xlsx');
        $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($file_excel);
        $array_from_excel = $spreadsheet->getActiveSheet()->toArray();
        DB::beginTransaction();
        $in_bandung = 703;
        foreach ($array_from_excel as $k => $v) {
            if ($k < 2) continue;
            $nama = $v[4];
            $email = $v[5];
            $latsar_id = $v[2];
            $latsar = Latsar::find($latsar_id);

            // insert user
            $user = new User();
            $user->name = $nama;
            $user->email = $email;
            $user->active = 1;
            $user->password = Hash::make('12345678');
            $user->save();

            // insert role
            $user->assignRole(['Peserta']);

            // insert peserta data
            $peserta = new Peserta();
            $peserta->user_id = $user->id;

            $peserta->nopeserta = static::getNoPeserta($latsar);

            $peserta->nik = $v[3];
            $peserta->nama = $nama;
            $peserta->email = $email;
            $peserta->no_whatsapp = $v[6];
            $peserta->tempat_lahir = $v[7];
            $peserta->tanggal_lahir = $v[8];
            $peserta->usia_saat_daftar = $v[9];
            $peserta->jenis_kelamin = $v[10];
            $peserta->agama = $v[11];
            $peserta->pendidikan_terakhir = $v[12];

            if ($k <= $in_bandung) {
                $peserta->ktp_provinsi_id = 32;
                $peserta->ktp_kab_kot_id = 3273;
                $kecamatan = District::inRandomOrder()->where('regency_id', 3273)->first();
                $peserta->ktp_kecamatan_id = $kecamatan->id;

                $kelurahan = Village::inRandomOrder()->where('district_id', $kecamatan->id)->first();
                $peserta->ktp_des_kel_id = $kelurahan->id;

                $peserta->ktp_alamat_lengkap = $v[13];
                $peserta->ktp_rt = random_int(1, 10);
                $peserta->ktp_rw = random_int(1, 10);

                // bandung
                $peserta->domisili = 1;
            } else {
                // luar bandung
                $provinsi = Province::inRandomOrder()->where('id', '<>', 32)->first();
                $peserta->ktp_provinsi_id = $provinsi->id;

                $kab = Regencie::inRandomOrder('province_id', $provinsi->id)->first();
                $peserta->ktp_kab_kot_id = $kab->id;

                $kecamatan = District::inRandomOrder()->where('regency_id', $kab->id)->first();
                $peserta->ktp_kecamatan_id = $kecamatan->id;

                $kelurahan = Village::inRandomOrder()->where('district_id', $kecamatan->id)->first();
                $peserta->ktp_des_kel_id = $kelurahan->id;

                $peserta->ktp_alamat_lengkap = 'sesuai ktp wkwk';
                $peserta->ktp_rt = random_int(1, 10);
                $peserta->ktp_rw = random_int(1, 10);

                $peserta->domisili_provinsi_id = 32;
                $peserta->domisili_kab_kot_id = 3273;
                $kecamatan = District::inRandomOrder()->where('regency_id', 3273)->first();
                $peserta->domisili_kecamatan_id = $kecamatan->id;
                $kelurahan = Village::inRandomOrder()->where('district_id', $kecamatan->id)->first();
                $peserta->domisili_des_kel_id = $kelurahan->id;

                $peserta->domisili_alamat_lengkap = $v[13];
                $peserta->domisili_rt = random_int(1, 10);
                $peserta->domisili_rw = random_int(1, 10);
            }



            $peserta->alasan = $v[14];
            $peserta->usaha = $v[15];
            $peserta->kendalau_saha = $v[16];
            $peserta->sekilas_usaha = $v[17];
            $peserta->produk = $v[18];
            $peserta->pelatihan_dispora_sebelumnya = $v[19];
            $peserta->pelatihan_lainnya = $v[20];
            $peserta->komunitas = $v[21];
            $peserta->ig_komunitas = $v[22];
            $peserta->profil_komunitas = $v[23];
            $peserta->tentang_diri = $v[24];
            $peserta->plus_minus_diri = $v[25];
            $peserta->prestasi_diri = $v[26];
            $peserta->kegagalan = $v[27];
            $peserta->impian = $v[28];
            $peserta->wawasan_latsar = $v[29];
            $peserta->komitmen = $v[30];
            $peserta->anak_ke_berapa = $v[31];
            $peserta->anak_ke_berapa_dari = $v[32];
            $peserta->harapan = $v[33];
            $peserta->pengertian_pengusaha = $v[34];
            $peserta->satusatunya = $v[35];
            $peserta->cocok_pengusaha = $v[36];
            $peserta->jika_tidak_jadi_pengusaha = $v[37];
            $peserta->bidang = $v[38];
            $peserta->bidang_spesifik = $v[39];
            $peserta->save();

            // insert peserta daftar
            $daftar = new PesertaDaftar();
            $daftar->latsar_id = $latsar_id;
            $daftar->peserta_id = $peserta->id;
            $daftar->tanggal = now();
            $daftar->angkatan = $latsar->angkatan_sekarang;
            $daftar->save();
            $total = count($array_from_excel);
            $presen =  ($k / $total) * 100;

            echo "$k of $total | $presen %" . PHP_EOL;
        }

        DB::commit();

        return true;
    }

    public static function getNoPeserta(Latsar $latsar)
    {
        $jmlPeserta = static::where('nopeserta', 'like', "C$latsar->kode%")->count();
        $number = $jmlPeserta + 1;
        $no = str_pad($number, 4, '0', STR_PAD_LEFT);

        return "C{$latsar->kode}{$no}";
    }
}
