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
        Schema::create('forms', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable();
            $table->string('nip')->nullable();
            $table->string('posisi')->nullable();
            $table->string('direktorat')->nullable();
            $table->date('tgl_masuk')->nullable();
            $table->string('periode')->nullable();
            $table->string('atasan')->nullable();
            $table->string('view_amil_1')->nullable();
            $table->string('view_amil_2')->nullable();
            $table->string('view_amil_3')->nullable();
            $table->string('view_amil_4')->nullable();
            $table->string('skor_1')->nullable();
            $table->string('skor_2')->nullable();
            $table->string('skor_3')->nullable();
            $table->string('skor_4')->nullable();
            $table->string('skor_5')->nullable();
            $table->string('skor_6')->nullable();
            $table->string('skor_7')->nullable();
            $table->string('skor_8')->nullable();
            $table->string('skor_9')->nullable();
            $table->string('view_atasan_1')->nullable();
            $table->string('view_atasan_2')->nullable();
            $table->string('view_atasan_3')->nullable();
            $table->string('view_atasan_4')->nullable();
            $table->string('view_atasan_5')->nullable();
            $table->string('view_atasan_6')->nullable();
            $table->string('view_atasan_7')->nullable();
            $table->string('ttd_atasan')->nullable();
            $table->date('ttd_atasan_tgl')->nullable();
            $table->string('ttd_amil')->nullable();
            $table->date('ttd_amil_tgl')->nullable();
            $table->string('ttd_manajer')->nullable();
            $table->date('ttd_manajer_tgl')->nullable();
            $table->string('wa_amil')->nullable();
            $table->string('wa_atasan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forms');
    }
};
