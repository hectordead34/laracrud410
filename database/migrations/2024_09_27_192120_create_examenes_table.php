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
        Schema::create('examenes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_asignaturas')->unsigned();
        $table->string('titulo', 100)->nullable();

        $table->foreignId('id_estudiantes')->unsigned();
        $table->string('nota', 50)->nullable();
        $table->integer('matricula')->unsigned()->nullable();

        $table->foreignId('id_periodos')->unsigned();
        $table->string('parcial', 100)->nullable();

        $table->foreign('id_asignaturas')->references('id')->on('asignaturas')
        ->onDelete('cascade')->onUpdate('cascade');
       
        $table->foreign('id_estudiantes')->references('id')->on('estudiantes')
        ->onDelete('cascade')->onUpdate('cascade');
        
        $table->foreign('id_periodos')->references('id')->on('periodos')
        ->onDelete('cascade')->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('examenes');
    }
};
