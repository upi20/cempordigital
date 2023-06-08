<?php

use App\Models\SPK\Kegiatan\Kegiatan;
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
        Schema::create(Kegiatan::tableName, function (Blueprint $table) { // spk
            $table->id();
            $table->text('nama')->nullable()->default(null);
            $table->text('slug')->nullable()->default(null);
            $table->date('tanggal_dari')->nullable()->default(null);
            $table->date('tanggal_sampai')->nullable()->default(null);
            $table->text('keterangan')->nullable()->default(null);
            $table->integer('status')->nullable()->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(Kegiatan::tableName);
    }
};
