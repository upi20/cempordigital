<?php

use App\Models\Import\SPK\Kegiatan\Peserta as ImportPeserta;
use App\Models\SPK\Kegiatan\Peserta;
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
            $table->string('nik')->nullable()->default(null);
            $table->string('nama')->nullable()->default(null);
            $table->string('slug')->nullable()->default(null);
            $table->string('no_whatsapp')->nullable()->default(null);
            $table->string('email')->nullable()->default(null);
            $table->string('tempat_lahir')->nullable()->default(null);
            $table->date('tanggal_lahir')->nullable()->default(null);
            $table->string('jenis_kelamin')->nullable()->default(null);
            $table->string('agama')->nullable()->default(null);
            $table->string('pendidikan_terakhir')->nullable()->default(null);
            $table->text('alamat_ktp')->nullable()->default(null);
            $table->string('kota')->nullable()->default(null);
            $table->string('kecamatan')->nullable()->default(null);
            $table->string('kelurahan')->nullable()->default(null);
            $table->text('alamat_domisili')->nullable()->default(null);
            $table->string('instagram')->nullable()->default(null);
            $table->text('ktp')->nullable()->default(null);

            $table->bigInteger('import_id', false, true)->nullable()->default(null);
            $table->foreign('import_id')->references('id')->on(ImportPeserta::tableName)->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
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
