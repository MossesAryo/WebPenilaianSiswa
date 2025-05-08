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
        Schema::create('nilai', function (Blueprint $table) {
            $table->id();
            $table->integer('nilai');
            $table->string('predikat');
            $table->integer('semester');
            $table->unsignedBigInteger('id_mata_pelajaran');
            $table->unsignedBigInteger('id_guru');
            $table->unsignedBigInteger('id_murid');
            $table->timestamps();
        
            $table->foreign('id_mata_pelajaran')->references('id')->on('mata_pelajaran');
            $table->foreign('id_guru')->references('id')->on('guru');
            $table->foreign('id_murid')->references('id')->on('murid');
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
