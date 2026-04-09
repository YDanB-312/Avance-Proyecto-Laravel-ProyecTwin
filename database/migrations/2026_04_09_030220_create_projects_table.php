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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->text('resumen');
            $table->text('palabras_clave')->nullable();
            $table->string('linea_tecnologica');
            $table->text('tecnologias')->nullable();
            $table->text('objetivos');
            $table->text('entregables')->nullable();
            $table->integer('duracion_estimada');
            $table->date('fecha_inicio_estimada');
            $table->string('url_logo')->nullable();
            $table->string('estado');

            $table->foreignId('id_creador')->constrained('general_users');
            $table->foreignId('id_instructor_asignado')->constrained('instructors');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
