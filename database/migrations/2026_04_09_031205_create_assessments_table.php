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
        Schema::create('assessments', function (Blueprint $table) {
            $table->id();
            $table->string('decision');
            $table->text('observacion')->nullable();
            $table->date('fecha_revision');
            $table->integer('tiempo_respuesta_dias');

            $table->foreignId('id_proyecto')->constrained('projects');
            $table->foreignId('id_instructor')->constrained('instructors');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assessments');
    }
};
