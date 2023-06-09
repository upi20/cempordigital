<?php

use App\Models\Address\District;
use App\Models\Address\Province;
use App\Models\Address\Regencie;
use App\Models\Address\Village;
use App\Models\Peserta;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create(Peserta::tableName, function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id', false, true)->nullable()->default(null);
            $table->string('nopeserta')->nullable()->default(null);

            // data diri
            $table->string('nik')->nullable()->default(null);
            $table->text('nama')->nullable()->default(null);
            $table->string('email')->nullable()->unique()->default(null);
            $table->string('no_whatsapp')->nullable()->default(null);
            $table->string('tempat_lahir')->nullable()->default(null);
            $table->date('tanggal_lahir')->nullable()->default(null);
            $table->integer('usia_saat_daftar')->nullable()->default(null);
            $table->string('jenis_kelamin')->nullable()->default(null);
            $table->string('agama')->nullable()->default(null);
            $table->string('pendidikan_terakhir')->nullable()->default(null);

            // alamat ktp
            $table->char('ktp_provinsi_id', 2)->nullable()->default(null);
            $table->char('ktp_kab_kot_id', 4)->nullable()->default(null);
            $table->char('ktp_kecamatan_id', 7)->nullable()->default(null);
            $table->char('ktp_des_kel_id', 10)->nullable()->default(null);

            $table->text('ktp_alamat_lengkap')->nullable()->default(null);
            $table->integer('ktp_rt')->nullable()->default(null);
            $table->integer('ktp_rw')->nullable()->default(null);
            $table->string('ktp_file')->nullable()->default(null);
            $table->integer('ktp_ada')->nullable()->default(0)->comment('1 Ada | 0 Tidak Ada');
            $table->string('kk_file')->nullable()->default(null);

            // alamat domisili
            $table->integer('domisili')->nullable()->default(0)->coment('1 Kota Bandung | 0 Luar Kota Bandung');
            $table->char('domisili_provinsi_id', 2)->nullable()->default(null);
            $table->char('domisili_kab_kot_id', 4)->nullable()->default(null);
            $table->char('domisili_kecamatan_id', 7)->nullable()->default(null);
            $table->char('domisili_des_kel_id', 10)->nullable()->default(null);

            $table->text('domisili_alamat_lengkap')->nullable()->default(null);
            $table->integer('domisili_rt')->nullable()->default(null);
            $table->integer('domisili_rw')->nullable()->default(null);
            $table->text('domisili_file')->nullable()->default(null);

            // alamat instagram
            $table->text('instagram')->nullable()->default(null);
            $table->text('facebook')->nullable()->default(null);
            $table->text('twitter')->nullable()->default(null);

            // data lain
            $table->text('alasan')->nullable()->default(null);
            $table->text('usaha')->nullable()->default(null);
            $table->text('kendalau_saha')->nullable()->default(null);
            $table->text('sekilas_usaha')->nullable()->default(null);
            $table->text('produk')->nullable()->default(null);
            $table->text('pelatihan_dispora_sebelumnya')->nullable()->default(null);
            $table->text('pelatihan_lainnya')->nullable()->default(null);
            $table->text('komunitas')->nullable()->default(null);
            $table->text('ig_komunitas')->nullable()->default(null);
            $table->text('profil_komunitas')->nullable()->default(null);
            $table->text('tentang_diri')->nullable()->default(null);
            $table->text('plus_minus_diri')->nullable()->default(null);
            $table->text('prestasi_diri')->nullable()->default(null);
            $table->text('kegagalan')->nullable()->default(null);
            $table->text('impian')->nullable()->default(null);
            $table->text('wawasan_latsar')->nullable()->default(null);
            $table->text('komitmen')->nullable()->default(null);
            $table->text('anak_ke_berapa')->nullable()->default(null);
            $table->text('anak_ke_berapa_dari')->nullable()->default(null);
            $table->text('harapan')->nullable()->default(null);
            $table->text('pengertian_pengusaha')->nullable()->default(null);
            $table->text('satusatunya')->nullable()->default(null);
            $table->text('cocok_pengusaha')->nullable()->default(null);
            $table->text('jika_tidak_jadi_pengusaha')->nullable()->default(null);
            $table->text('bidang')->nullable()->default(null);
            $table->text('bidang_spesifik')->nullable()->default(null);
            $table->text('persetujuan')->nullable()->default(null);

            $table->integer('kurasi_pernah_lulus')->nullable()->default(0);
            $table->integer('kurasi_angkatan')->nullable()->default(null);
            $table->integer('blokir')->nullable()->default(0);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on(User::tableName)->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('ktp_provinsi_id')->references('id')->on(Province::tableName)->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('ktp_kab_kot_id')->references('id')->on(Regencie::tableName)->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('ktp_kecamatan_id')->references('id')->on(District::tableName)->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('ktp_des_kel_id')->references('id')->on(Village::tableName)->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('domisili_provinsi_id')->references('id')->on(Province::tableName)->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('domisili_kab_kot_id')->references('id')->on(Regencie::tableName)->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('domisili_kecamatan_id')->references('id')->on(District::tableName)->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('domisili_des_kel_id')->references('id')->on(Village::tableName)->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(Peserta::tableName);
    }
};
