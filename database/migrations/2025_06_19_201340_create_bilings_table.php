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
        Schema::create('bilings', function (Blueprint $table) {
            $table->id();
            $table->integer('kd_biling')->unique();
            $table->integer('waktu_biling');
            $table->integer('id_member');
            $table->date('tgl_pembelian');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bilings');
    }
};
