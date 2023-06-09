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
        'domisili',
        'domisili_provinsi_id',
        'domisili_kab_kot_id',
        'domisili_kecamatan_id',
        'domisili_des_kel_id',
        'domisili_alamat_lengkap',
        'domisili_rt',
        'domisili_rw',
        'domisili_file',
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
            $peserta->agama = $v[1];
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
            } else {
                // luar bandung
                $provinsi = Province::inRandomOrder()->first();
                $peserta->ktp_provinsi_id = $provinsi->id;

                $kab = Regencie::inRandomOrder('province_id', $provinsi->id)->first();
                $peserta->ktp_kab_kot_id = $kab->id;

                $kecamatan = District::inRandomOrder()->where('regency_id', $kab->id)->first();
                $peserta->ktp_kecamatan_id = $kecamatan->id;

                $kelurahan = Village::inRandomOrder()->where('district_id', $kecamatan->id)->first();
                $peserta->ktp_des_kel_id = $kelurahan->id;

                $peserta->ktp_alamat_lengkap = 'sesuai ktp wkwk';
                $peserta->ktp_rt = random_int(1, 10);;
                $peserta->ktp_rw = random_int(1, 10);;

                // bandung
                $peserta->domisili = 1;
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
    }


    public static function getNoPeserta(Latsar $latsar)
    {
        $jmlPeserta = static::where('nopeserta', 'like', "C$latsar->kode%")->count();
        $number = $jmlPeserta + 1;
        $no = str_pad($number, 4, '0', STR_PAD_LEFT);

        return "C{$latsar->kode}{$no}";
    }
}
