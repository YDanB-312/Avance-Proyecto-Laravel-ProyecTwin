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
        Schema::create('similarities', function (Blueprint $table) {
            $table->id();
            $table->float('porcentaje_detectado');

            $table->foreignId('id_proyecto_1')->constrained('projects');
            $table->foreignId('id_proyecto_2')->constrained('projects');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('similarities');
    }
};
