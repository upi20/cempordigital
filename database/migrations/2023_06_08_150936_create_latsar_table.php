<?php

use App\Models\Latsar\Latsar;
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
        Schema::create(Latsar::tableName, function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable()->default(null);
            $table->text('slug')->nullable()->default(null);
            $table->string('angkatan_sekarang')->nullable()->default(null);
            $table->integer('dibuka')->nullable()->default(0);
            $table->text('deskripsi')->nullable()->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(Latsar::tableName);
    }
};
