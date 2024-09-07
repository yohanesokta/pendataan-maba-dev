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
        Schema::create('anggota', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('fotoformal');
            $table->string('fotoselfie');
            $table->string('nama');
            $table->integer('kelompok');
            $table->string('nim');
            $table->string('web')->default(null);
            $table->string('alamat');
            $table->string('no');
            $table->string('ttl');
        });
        //
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anggota');
    }
};
