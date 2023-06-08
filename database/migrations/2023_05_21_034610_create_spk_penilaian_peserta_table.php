<?php

use App\Models\SPK\Kegiatan\Penilaian\Penilaian;
use App\Models\SPK\Kegiatan\Penilaian\Peserta;
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
            $table->bigInteger('penilaian_id', false, true)->nullable()->default(null);
            $table->bigInteger('peserta_id', false, true)->nullable()->default(null);
            $table->double('nilai')->nullable()->default(null);

            $table->timestamps();
            $table->unique(['penilaian_id', 'peserta_id']);
            $table->foreign('penilaian_id')->references('id')->on(Penilaian::tableName)->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('peserta_id')->references('id')->on(Peserta::tableName)->cascadeOnDelete()->cascadeOnUpdate();
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
