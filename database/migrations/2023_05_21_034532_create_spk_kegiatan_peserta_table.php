<?php

use App\Models\SPK\Kegiatan\Kegiatan;
use App\Models\SPK\Kegiatan\KegiatanPeserta;
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
        Schema::create(KegiatanPeserta::tableName, function (Blueprint $table) { // alternatif
            $table->id();
            $table->bigInteger('kegiatan_id', false, true)->nullable()->default(null);
            $table->bigInteger('peserta_id', false, true)->nullable()->default(null);
            $table->timestamps();

            $table->foreign('kegiatan_id')->references('id')->on(Kegiatan::tableName)->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('peserta_id')->references('id')->on(Peserta::tableName)->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(KegiatanPeserta::tableName);
    }
};
