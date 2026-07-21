<?php

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
        Schema::create('osn_records', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('tahun');
            $table->string('kategori');
            $table->string('nama');
            $table->string('npsn')->nullable();
            $table->string('sekolah');
            $table->string('kab_kota');
            $table->string('provinsi');
            $table->string('bidang');
            $table->boolean('verified')->default(false);
            $table->boolean('lolos_osnp');
            $table->boolean('lolos_osnsf')->nullable();
            $table->boolean('lolos_osnf')->nullable();
            $table->boolean('is_medalist')->nullable();
            $table->string('medali')->nullable();
            $table->boolean('binaan_lopi')->nullable();
            $table->string('source_file')->nullable();
            $table->foreignId('import_log_id')
                ->constrained()
                ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('osn_records');
    }
};
