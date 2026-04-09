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
        Schema::create('apprentice_projects', function (Blueprint $table) {
            $table->id();
            $table->string('rol_en_proyecto');
            $table->date('fecha_union');

            $table->foreignId('id_aprendiz')->constrained('apprentices')->onDelete('cascade');
            $table->foreignId('id_proyecto')->constrained('projects')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apprentice_projects');
    }
};
