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
        Schema::create('project_histories', function (Blueprint $table) {
            $table->id();
            $table->string('estado');
            $table->text('descripcion');
            $table->date('fecha');

            $table->foreignId('id_proyecto')->constrained('projects');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_histories');
    }
};
