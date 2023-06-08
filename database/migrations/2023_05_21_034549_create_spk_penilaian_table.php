<?php

use App\Models\SPK\Kegiatan\Kegiatan;
use App\Models\SPK\Kegiatan\Penilaian\Penilaian;
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
        Schema::create(Penilaian::tableName, function (Blueprint $table) { // kriteria
            $table->id();
            $table->bigInteger('kegiatan_id', false, true)->nullable()->default(null);
            $table->text('nama')->nullable()->default(null);
            $table->text('slug')->nullable()->default(null);
            $table->string('kode')->nullable()->default(null);
            $table->double('bobot')->nullable()->default(0);
            $table->text('keterangan')->nullable()->default('');
            $table->timestamps();

            $table->foreign('kegiatan_id')->references('id')->on(Kegiatan::tableName)->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(Penilaian::tableName);
    }
};
