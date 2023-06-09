<?php

use App\Models\Latsar\Latsar;
use App\Models\Latsar\Peserta as LatsarPeserta;
use App\Models\Peserta;
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
        Schema::create(LatsarPeserta::tableName, function (Blueprint $table) {
            $table->id();
            $table->bigInteger('latsar_id', false, true)->nullable()->default(null);
            $table->bigInteger('peserta_id', false, true)->nullable()->default(null);
            $table->integer('angkatan')->nullable()->default(null);
            $table->timestamps();

            $table->foreign('latsar_id')->references('id')->on(Latsar::tableName)->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('peserta_id')->references('id')->on(Peserta::tableName)->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(LatsarPeserta::tableName);
    }
};
