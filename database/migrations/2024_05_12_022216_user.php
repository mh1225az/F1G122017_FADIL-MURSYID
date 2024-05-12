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
        Schema::create('user', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('password');
            // $table->string('kode_mapel');
            // $table->string('kode_guru');
            // $table->string('kode_sarana');
            // $table->foreign('nama_kelas')->references('id')->on('kelas');
            // $table->foreign('kode_mapel')->references('kode_mapel')->on('mapel');
            // $table->foreign('kode_sarana')->references('kode_sarana')->on('sarana');
            // $table->foreign('kode_guru')->references('kode_guru')->on('guru');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
