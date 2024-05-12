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
        Schema::create('sarana', function (Blueprint $table) {
           $table->string('nama_sarana');
           $table->unsignedBigInteger('id_kelas');
           $table->foreign('id_kelas')->references('id')->on('kelas');

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
