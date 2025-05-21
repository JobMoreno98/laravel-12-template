<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            $table->string('codigo');
            $table->tinyInteger('semestre');
            $table->string('ingreso');
            $table->string('estatus');
            $table->string('cicloActual');
            $table->string('edad');
            $table->string('sexo', 10);
            $table->boolean('lugarOrigen');
            $table->boolean('vivienda');
            $table->boolean('empleo');
            $table->string('horasTrabajo');
            $table->boolean('internet');
            $table->boolean('computadora');
            $table->boolean('deportes');
            $table->boolean('enfermedad');
            $table->string('enfermedades');
            $table->boolean('acoso');
            $table->boolean('acosoUDG');
            $table->boolean('atencionPsicologica');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumnos');
    }
};
