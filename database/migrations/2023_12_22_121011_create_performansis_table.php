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
        Schema::create('performansis', function (Blueprint $table) {
            $table->id();
            $table->integer('gol')->nullable();
            $table->integer('assist')->nullable();
            $table->integer('pertandingan')->nullable();
            $table->integer('kartu_kuning')->nullable();
            $table->integer('kartu_merah')->nullable();
            $table->integer('fisik')->nullable();
            $table->integer('kecepatan')->nullable();
            $table->integer('penyerangan')->nullable();
            $table->integer('bertahan')->nullable();
            $table->integer('teknik')->nullable();
            $table->unsignedBigInteger('pemain_id')->nullable();
            $table->foreign('pemain_id')->references('id')->on('pemains')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('performansis');
    }
};
