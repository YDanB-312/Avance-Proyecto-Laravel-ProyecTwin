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
        Schema::create('progress', function (Blueprint $table) {
            $table->id();
            $table->integer('trimestre');
            $table->text('descripcion_logros');
            $table->text('dificultades')->nullable();
            $table->text('proximos_pasos')->nullable();
            $table->string('url_evidencia')->nullable();
            $table->date('fecha_registro');
            $table->float('porcentaje_progreso');

            $table->foreignId('id_proyecto')->constrained('projects');
            $table->foreignId('id_aprendiz')->constrained('apprentices');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('progress');
    }
};
