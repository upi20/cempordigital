<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\Datatables\Datatables;
use Haruncpi\LaravelUserActivity\Traits\Loggable;

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
}
