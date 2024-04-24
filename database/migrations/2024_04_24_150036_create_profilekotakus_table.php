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
        Schema::create('profilekotakus', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->text('sejarah');
            $table->string('batasUtara');
            $table->string('batasSelatan');
            $table->string('batasBarat');
            $table->string('batasTimur');
            $table->text('iklim');
            $table->text('topografi');
            $table->text('wisataAlam');
            $table->text('wisataPantai');
            $table->text('wisataAir');
            $table->text('wisataCandi');
            $table->text('wisataKuliner');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profilekotakus');
    }
};
