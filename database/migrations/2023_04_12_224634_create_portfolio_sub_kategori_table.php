<?php

use App\Models\Portfolio\Kategori;
use App\Models\Portfolio\SubKategori;
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
        Schema::create(SubKategori::tableName, function (Blueprint $table) {
            $table->id();
            $table->bigInteger('kategori_id', false, true)->nullable()->default(null);
            $table->integer('urutan')->nullable()->default(1);
            $table->string('nama')->nullable()->default(null);
            $table->string('slug')->nullable()->default(null)->unique();
            $table->text('keterangan')->nullable()->default(null);
            $table->timestamps();

            $table->foreign('kategori_id')
                ->references('id')->on(Kategori::tableName)
                ->nullOnDelete()
                ->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(SubKategori::tableName);
    }
};
